<?php
    function generatePassword($pwd_length){
        $password = '';
        $characters_string = 'abcdefghijklmnopqrstuvwxyz'.strtoupper('abcdefghijklmnopqrstuvwxyz').'0123456789!?&%$<>^+-*/()[]{}@#_=';
        
        $charachters_length = strlen($characters_string);
        while(strlen($password) < $pwd_length){
            $index = rand(0, $charachters_length - 1);

            $password .= $characters_string[$index];

        }
        var_dump($password);
        return $password;
    }
?>