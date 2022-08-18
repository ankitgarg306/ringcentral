<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation {

   public function isValidNumber($num){
        $regex =  '/^[1-9][0-9]*$/';    // /^[1-9][0-9]{0,15}$/ allow the string to be between 1 and 16 digits long
        return preg_match($regex, $num);
    }

    public function isValidString($str){
        $regex = '/^[A-Za-z0-9_-]*$/';
       return preg_match($regex, $str);
    }

    public function isValidUS_PhoneNumber($phone_number){

    }

    public function isValidEmail($email){
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
        return preg_match($regex, $email);
    }


}