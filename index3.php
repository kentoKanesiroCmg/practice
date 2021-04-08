<?php
require './session.php';

if(isset($_SESSION['name'])) {
  echo $_SESSION['name'].'===こちらがセッションに保存されています。';
} else {
  echo 'セッションnameに保存されてません。';
}