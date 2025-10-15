"use strict";
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('footer-form');

    // Применяем маску на поле телефона
    $('input[name="phone"]').mask('+7 (999) 999-99-99');

    // Функция для добавления класса ошибки
    function showError(input, message) {
        input.classList.add('error');
        alert(message);
    }

    // Функция для проверки формата номера телефона
    function validatePhoneNumber(phoneValue) {
        const regex = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/;
        return regex.test(phoneValue);
    }

    function phone_sending(id) {
        $(id).on('click', 'button', function (event) {
            event.preventDefault();

            let $number_phone = $(id).find('input[name="phone"]').val().trim();
            const phoneInput = $(id).find('input[name="phone"]');

            // Убираем класс ошибки перед новой валидацией
            phoneInput.removeClass('error');

            // Валидация поля телефона
            if ($number_phone === '') {
                phoneInput.addClass('error'); 
                return; 
            } else if (!validatePhoneNumber($number_phone)) {
                phoneInput.addClass('error'); 
                return; 
            }

            let formData = new FormData();
            formData.append('action', 'send_phone_email'); 
            formData.append('phone', $number_phone); 

            console.log({ action: 'send_phone_email', phone: $number_phone });

            // AJAX запрос
            jQuery.ajax({
                url: myAjax.ajax_url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    try {
                        response = JSON.parse(response); 
                    } catch (e) {
                        console.error("Ошибка парсинга JSON:", e);
                        alert('Ошибка обработки ответа от сервера.');
                        return; 
                    }

                    if (response.status === 1) {
                        $(id).addClass('send'); 
                    } else {
                        phoneInput.addClass('error'); 
                    }
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);// Логируем ошибку
                }
            });
        });
    }

    phone_sending('#footer-form');

    // Перенос кода для клика на input
    $('input[name="phone"]').on('click', function() {
        if ($(this).hasClass('error')) {
            $(this).removeClass('error'); 
        }
    });
});
