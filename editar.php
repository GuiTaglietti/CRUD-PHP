<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar vaga');

use App\Entity\Users;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obUsers = Users::getUser($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$obUsers instanceof Users){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['username'],$_POST['passw'],$_POST['gender'])){

  $obUsers->username    = $_POST['username'];
  $obUsers->passw       = md5($_POST['passw']);
  $obUsers->gender      = $_POST['gender'];
  $obUsers->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';