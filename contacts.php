<? require_once 'header.php' ?>        
   <div class="no-bottom no-top" id="content">

      <div id="top"></div>

      <section class="bg-blue section-dark pb-0 relative overflow-hidden">
         <img src="images/deco/s1.webp" class="w-5 mt-min-60 abs start-10 bottom-10 wow scaleOut" alt="">
         <div id="shine-wrapper">
            <div class="template shine"></div>
         </div>
         <div class="container relative z-1000">
            <div class="row g-3 align-items-center">
               <div class="col-lg-6">
                  <div class="relative z-1000">
                     <h1 class="wow fadeInUp mb-2" data-wow-delay=".2s">Контакты</h1>
                     <p class="lead col-lg-10 mb-0 wow fadeInUp" data-wow-delay=".4s">Отвечу на все вопросы</p>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="images/misc/4.png" class="w-100" data-wow-delay=".6s" alt="" data-0="transform: translateY(0px);" data-500="transform: translateY(300px);">
                  </div>
               </div>    
            </div>
         </div>
      </section>
      
      <section class="relative overflow-hidden">
         <div class="container">
            <div class="row g-4 grid-divider">
               <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".2s">
                  <div class="text-center">       
                     <img src="images/icons/steps/notes.png" class="bg-color w-100px p-15 rounded-1 mb-3 wow scaleIn" alt="">                     
                     <h4>Юридический адрес</h4>
                     <p class="mb-0">344034 г. Ростов-на-Дону,<br> пер. Парусный, д. 48, кв. 102</p>
                  </div>
               </div>
               <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".4s">
                  <div class="text-center">                  
                     <img src="images/icons/white/location.png" class="bg-color w-100px p-15 rounded-1 mb-3 wow scaleIn" alt="">            
                     <h4>Фактический адрес</h4>
                     <p class="mb-0">344033, г .Ростов-на-Дону,<br> ул. Магнитогорская, 1/1</p>
                  </div>
               </div>
               <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".6s">
                  <div class="text-center">
                     <img src="images/icons/white/calendar.webp" class="bg-color w-100px p-15 rounded-1 mb-3 wow scaleIn" alt="">                              
                     <h4>Режим работы</h4>
                     <p class="mb-0">ПН-ПТ 9:00-17:00, СБ 9:00 - 15:00, Воскресенье выходной</p>
                  </div>
               </div>
               <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".8s">
                  <div class="text-center contact__link">                         
                     <img src="images/icons/white/phone.png" class="bg-color w-100px p-15 rounded-1 mb-3 wow scaleIn" alt="">     
                     <h4>Телефон</h4>
                     <a href="tel:+78632049558" class="mb-0">+7 (863) 204-95-58</a><br>
                  </div>
               </div>
               <div class="col-md-1-5 wow fadeInRight" data-wow-delay="1s">
                  <div class="text-center contact__link">       
                     <img src="images/icons/white/email.png" class="bg-color w-100px p-15 rounded-1 mb-3 wow scaleIn" alt="">                       
                     <h4>Почта</h4>
                     <a href="mailto:o-knyazeva89@bk.ru">o-knyazeva89@bk.ru</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-blue section-dark">
         <div class="container relative">
            <div class="row g-4 justify-content-between align-items-center">
               <div class="col-lg-6 relative">
                  <div class="relative z-1000">
                     <h3>Реквизиты</h3>

                     <ul class="ul-style-2">
                        <li><strong>ИП</strong> Князева О.А.</li>
                        <li><strong>ИНН</strong>: 615524416390</li>
                        <li><strong>ОГРНИП</strong>: 318619600231488</li>
                     </ul>
                  </div>
               </div>

               <div class="col-lg-5">
                  <div class="bg-white p-40 shadow-soft h-100 rounded-1 contact-form">
                        <h3>Запись на прием</h3>
                        <p>Администратор перезвонит вам в течение 30 сек</p>
                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="contact.php">
                           <div class="row g-3">
                              <div class="col-12">
                                    <div class="field-set">
                                       <input type="text" id="phone1" name="phone" class="form-control" placeholder="+7(___)___--" required>
                                    </div>
                              </div>
                              <div class="col-12 mb-3">
                                 <div id='submit' class="w-100">
                                    <input type='submit' id='send_message' value='Отправить' class="btn-main btn-red w-100">
                                 </div>
                              </div>
                           </div>
                           <p>Нажимая на кнопку "Отправить", я даю согласие на обработку персональных данных и принимаю условия политики обработки персональных данных</p>
                           
                           <div id="success_message" class='success' style="display: none;">
                              Ваше сообщение было успешно отправлено!
                           </div>
                           <div id="error_message" class='error' style="display: none;">
                              Произошла ошибка! Пожалуйста, проверьте введенные данные.
                           </div>
                        </form>
                        
                  </div>
               </div>

            </div>
         </div>
      </section>
      
   </div>
<? require_once 'footer.php' ?>