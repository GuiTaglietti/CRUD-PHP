<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar usuário');

use App\Entity\Users;
$obUsers = new Users;

//VALIDAÇÃO DO POST
if(isset($_POST['username'],$_POST['passw'],$_POST['gender'])){

  $obUsers->username   = $_POST['username'];
  $obUsers->passw      = $_POST['passw'];
  $obUsers->gender     = $_POST['gender'];
  $obUsers->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';