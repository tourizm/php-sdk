<?php

class Tourizm {
  function Tourizm($localhost = '', $username = '', $password = '', $database = '') {
    $this->localhost = $localhost;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
    $this->connection = mysqli_connect('localhost',$this->username,$this->password,$this->database);
  }
}
