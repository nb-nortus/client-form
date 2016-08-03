<?php
            include('Library/NCL.NameCase.ru.php');
            $nc = new NCLNameCaseRu(); 
            $person = $_POST['firstname'].' '.$_POST['lastname']; 
            $gender = $nc->genderDetect($person); 
            if($gender == NCL::$MAN) {
                      echo 'Я на все согласен!';
                  }
                  else {
                      echo 'Я на все согласна!'; 
                  }
                 
        ?>

