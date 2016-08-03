
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Клиентская форма</title>
        <link rel="stylesheet" type="text/css" media="all" href="styles/styles.css">	
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/myscript.js"></script>
        <script language="javascript1.2" src="js/jquery.maskedinput.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $('#date_birth').mask('99.99.9999');
                $('#date_issue').mask('99.99.9999'); 
                $('#phone').mask('+9(999) 999-99-99');
                $('#passport').mask('9999 999999');  
                $('#code').mask('999');
                $('#code2').mask('999');
                $("#date2").mask("99/99/9999",{placeholder:"-"}); // Маска для даты с прочерками
                $("#phone2").mask("(999) 999-99-99",{completed:function(){alert("Этого: "+this.val()+" достаточно!");}}); // Маска для телефона с алерт окном
            });
        </script>
        <!--[if lt IE 9]>
             <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    <script type="text/javascript">
  
    </script>
    </head>
    <body>
    <div id="conteiner">
    <form id="contactform" name="contact" method="post" action="reg.php?reg">
      <p class="note"><span class="req">*</span> Поля со звездочкой обязательны для заполнения</p>
      
      <div class="row">
        <label for="lastname">Фамилия <span class="req">*</span></label>
        <input type="text" name="lastname" id="lastname" class="txt" tabindex="1" placeholder="Иванов" required>
      </div>
      
      <div class="row">
        <label for="firstname">Имя <span class="req">*</span></label>
        <input type="text" name="firstname" id="firstname" class="txt" tabindex="2" placeholder="Иван" required>
      </div>
      
      <div class="row">
        <label for="patronymic">Отчество <span class="req">*</span></label>
        <input type="text" name="patronymic" id="patronymic" class="txt" tabindex="3" placeholder="Иванович" required>
      </div>
        
      <div class="row">
        <label for="date_birth">Дата Рождения <span class="req">*</span></label>
        <input type="text" name="date_birth" id="date_birth" class="txt" tabindex="4" placeholder="13.08.1991" required>
      </div>
      
       <div class="row">
        <label for="phone">Контакнтный телефон <span class="req">*</span></label>
        <input type="tel" name="phone" id="phone" class="txt" tabindex="5" placeholder="+7(925)-053-04-49" required>
      </div>
      <div class="row">
          <label for="email">Электронная почта <span class="req">*</span></label>
        <input type="email" name="email" id="email" class="txt" tabindex="6" placeholder="address@mail.ru" required>
      </div>
      
      <div class="row">
        <label for="passport">Серия и номер паспорта <span class="req">*</span></label>
        <input type="text" name="passport" id="passport" class="txt" tabindex="7" placeholder="1111 222222" required>
      </div>
      
      <div class="row">
        <label for="issued">Кем выдан <span class="req">*</span></label>
        <input type="text" name="issued" id="issued" class="txt" tabindex="8" placeholder='ОВД "Текстильщики" гор. Москвы' required>
      </div>
      
      <div class="row">
        <label for="date_issue">Дата выдачи <span class="req">*</span></label>
        <input type="text" name="date_issue" id="date_issue" class="date_issue" tabindex="9" placeholder="12.09.2011" required>
        <label for="code" class="label_code"> Код подразделения <span class="req">*</span></label>
        <input type="text" name="code" id="code" class="input_code" tabindex="10" placeholder="290" required> - 
        <input type="text" name="code2" id="code2" class="input_code" tabindex="11" placeholder="001" required>
      </div>
      
      <div class="row">
        <label for="place_Birth">Местро рождения <span class="req">*</span></label>
        <input type="text" name="place_Birth" id="place_Birth" class="txt" tabindex="12" placeholder="гор. Архангельск" required>
      </div>
 
      <div class="row">
          <label></label>
          <input type="checkbox" class="checkbox" name="checkme" id="agree" />
          <label  for="agree" id="result" class="label_checkbox">Я согласен(на) на все!</label>
 
      </div>
      <div class="center">
        <input type="submit" id="submitbtn" name="submitbtn" tabindex="13" value="Подтвердить">
      </div>
    </form>
    </div>
    </body>
</html>
