<?php
      function translit($string) {
                $rus = array("ё", "й", "ю", "ь", "ч", "щ", "ц", "у", "к", "е", "н", "г", "ш", "з", "х", "ъ", "ф", "ы", "в", "а", "п", "р", "о", "л",
                "д", "ж", "э", "я", "с", "м", "и", "т", "б", "Ё", "Й", "Ю", "Ч", "Ь", "Щ", "Ц", "У", "К", "Е", "Н", "Г", "Ш", "З", "Х", "Ъ",
                "Ф", "Ы", "В", "А", "П", "Р", "О", "Л", "Д", "Ж", "Э", "Я", "С", "М", "И", "Т", "Б", " ", "*", "/", "'", "`", "№", ".", ",", "\"", "\\", ":", "«", "»", "’");
                $eng = array("yo", "iy", "yu", "", "ch", "sh", "c", "u", "k", "e", "n", "g", "sh", "z", "h", "", "f", "y", "v", "a", "p", "r", "o",
                "l", "d", "j", "e", "ya", "s", "m", "i", "t", "b", "Yo", "Iy", "Yu", "CH", "", "SH", "C", "U", "K", "E", "N", "G", "SH", "Z",
                "H", "'", "F", "Y", "V", "A", "P", "R", "O", "L", "D", "J", "E", "YA", "S", "M", "I", "T", "B", "_", "X", "_", "", "", "No", ".", "", "", "", "", '', '', '\'');

                // Replace Russian characters with their transliterated Latin equivalents
                $string = str_replace($rus, $eng, $string);
                if (!empty($string)) {
                    return $string;
                }
                else
                    return("");
                }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Клиентская форма</title>
        <link rel="stylesheet" type="text/css" media="all" href="styles/styles.css">	
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <!--[if lt IE 9]>
             <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
    <div id="conteiner">
    <?php
        $url = $_SERVER['QUERY_STRING'];
        if ($url=='reg')
        {
            $firstname = translit($_POST['firstname']);
            $lastname = translit($_POST['lastname']);
            $patronymic = translit($_POST['patronymic']);
            $date_birth = $_POST['date_birth'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];	
            $passport = $_POST['passport'];
            $issued = translit($_POST['issued']);
            $date_issue = $_POST['date_issue'];
            $code = $_POST['code'];
            $code2 = $_POST['code2'];
            $place_Birth = translit($_POST['place_Birth']);
            $date=date("d.m.Y");
            // пример использования
            include('SendMailSmtpClass.php'); // подключаем класс

            $mailSMTP = new SendMailSmtpClass('serve.matveev@yandex.ru', 'qwerty1122', 'ssl://smtp.yandex.ru', 'Evgeniy', 465); // создаем экземпляр класса
            // $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');

            // заголовок письма
            $headers= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
            $headers .= "From: Service_massege <serve.matveev@yandex.ru>\r\n"; // от кого письмо
            $msg_body = "В базу данных была добавлена новая заявка! Ее отправил: ".$lastname." ".$firstname." ".$patronymic." Контактные данные: ".$email." ".$phone; 
            $result_msg =  $mailSMTP->send('nikitosikys@mail.ru', 'Обновление базы данных', $msg_body, $headers); // отправляем письмо
            // $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
          
            
            
            include ('connect.php');
            
            $result = mysql_query ("INSERT INTO client (lastname,firstname,patronymic,date_birth,phone,email,passport,issued,date_issue,code,code2,place_Birth,date) VALUES('$lastname','$firstname','$patronymic','$date_birth','$phone','$email','$passport','$issued','$date_issue','$code','$code2','$place_Birth','$date')");
            if ($result)
            {   
               
                echo ("
                        <form method='POST' action='?list'>
			 <div class='row'>
                            <div class='msg'>Ваша заявка успешно отправлена! </div>
                         </div>
                         <div class='center'>
                            <input type='submit' id='submitbtn' name='sbtn' value='Список заявок'>
                         </div>
                        </form>		
                    ");
            }
            else
            {
                echo "Что-то пошло не так, вернутся <a href='index.php'> назад </a>";
            }
        }
        if($url=='list')
        {   
           echo("
                   <form method='POST' action='index.php'>
                    <div class='title'>Список отправленных заявок </div>
                         
                ");
           
           include("connect.php");
           $TableName = "client";
							
           $Query_project = "SELECT * FROM $TableName ORDER BY `id` desc ";
	   $Result_project = mysql_query ($Query_project);
	   while ($Row_project = mysql_fetch_array($Result_project))
	   {
               echo("	
                    <div class='row'>
			<div class='date'>Отправлена: $Row_project[date]  </div>
                        <div class='info'>Заявка №$Row_project[id] $Row_project[lastname] $Row_project[firstname] $Row_project[patronymic]  </div>
      		    </div>
	        ");
           }
          
           echo("
                    <div class='center'>
                        <input type='submit' id='submitbtn' name='sbtn' value='На главную'>
                    </div>
                    </form>	
                   ");
         
        }
    ?>
    </div>
    </body>
</html>
