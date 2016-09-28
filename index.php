<?php

class Tourizm {
  function Tourizm($localhost = '', $username = '', $password = '', $database = '') {
    $this->localhost = $localhost;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
    $function = 'mysqli_connect';
    if ( function_exists($function) )
    {
      $this->connection = mysqli_connect('localhost',$this->username,$this->password,$this->database);
    }
    else
    {
      throw new Exception('Отсуствие функции '.$function);
    }
  }
}
