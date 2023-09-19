<?php
function requird_string($input){
   $input= trim($input);
   $input=filter_var($input,FILTER_SANITIZE_STRING);
   if(!empty($input))return true;
   return false;
}
function requird_email($input){
    $input= trim($input);
    $input=filter_var($input,FILTER_SANITIZE_EMAIL);
    if(!empty($input))return true;
    return false;
 }
 function validEmail($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL))return true;
    return false;
 }
function request_method($typeRequest){
    if($_SERVER['REQUEST_METHOD']==$typeRequest)return true;
    else return false;
}
function minLength($name,$length){
   if(strlen($name)>=$length)return true;
   return false;
}
?>