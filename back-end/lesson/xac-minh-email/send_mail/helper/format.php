<?php

/**
 * Format Class
 */
class Format
{
   public function formatDate($date)
   {
      return date('F j, Y, g:i a', strtotime($date));
   }

   public function textShorten($text, $limit = 400)
   {
      $text = $text . " ";
      $text = substr($text, 0, $limit);
      $text = substr($text, 0, strrpos($text, ' '));
      $text = $text . ".....";
      return $text;
   }

   public function validation($data)
   {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   public function title()
   {
      $path = $_SERVER['SCRIPT_FILENAME'];
      $title = basename($path, '.php');
      //$title = str_replace('_', ' ', $title);
      if ($title == 'index') {
         $title = 'home';
      } elseif ($title == 'contact') {
         $title = 'contact';
      }
      return $title = ucfirst($title);
   }
}
function is_username($username)
{
   global $error;
   $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
   if (!preg_match($partten, $username, $matchs)) {
      return false;
   }
   return true;
}
function is_password($password)
{
   global $error;

   $partten = "/^[A-Z]{1}[\w_\.!@#$%^&*()+]{6,32}$/";
   if (!preg_match($partten, $password, $matchs)) {
      return false;
   }
   return true;
}
function show_array($data)
{
   echo "<pre>";
   print_r($data);
   echo "</pre>";
}
function check_login($username, $password)
{
   global $list_users;
   foreach ($list_users as $item) {
      if ($username == $item['username'] &&  $password == $item['password']) {
         return true;
      }
   }
   return false;
}
function is_login()
{
   if (isset($_SESSION['is_login'])) {
      return true;
   }
   return false;
}

function user_login()
{
   if (!empty($_SESSION['user_login'])) {
      return $_SESSION['user_login'];
   }
   return false;
}

function infor_user($field = 'id')
{
   global $list_users;
   if (isset($_SESSION['is_login'])) {
      foreach ($list_users as $user) {
         if ($_SESSION['user_login'] == $user['username']) {
            if (array_key_exists($field, $user)) {
               return $user[$field];
            }
         }
      }
   }
   return false;
}
function user_exists($username,$email){
   $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '{$email}' OR `username`='{$username}'");
   if($check_user>0)
      return true;
   return false;
}
function add_user($data){
   return db_insert('tbl_users',$data);
}
function check_active_token($active_token){
   $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `active_token` = '{$active_token}' AND `is_active` = 0");
   if($check>0)
      return false;
   return true;
}
function active_action($active_token){
   if(check_active_token($active_token)){
      db_update('tbl_users',array('is_active' => 1),"`active_token` = '{$active_token}'");
      return true;
   }else{
      return false;
   }
   
}