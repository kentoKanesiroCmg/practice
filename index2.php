<?php

echo'index2phpファイルです。';
echo '<br>';
var_dump($_REQUEST);
echo '<br>==========';
echo '<br>';

$name = '';
if(isset($_GET['name'])){
    echo 'get送信';
    echo '<br>';
    var_dump($_GET);
    $name = $_GET['name'];
}elseif(isset($_POST['name'])){
    echo 'post送信';
    echo '<br>';
    var_dump($_POST);
    $name = $_POST['name'];
}

echo '<br>==========';
echo '<br>';
print ("次のデータを受け取りました<br />");
print ("名前：$name<br />");

var_dump($_COOKIE);