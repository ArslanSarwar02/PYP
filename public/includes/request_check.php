<?php

    function filter_string($input){
        // checking string
           $input = trim($input);
           $input = htmlspecialchars($input);
           $input = stripslashes($input);
           if(filter_var($input, FILTER_SANITIZE_STRING)) {
               return $input;
           }
    }

