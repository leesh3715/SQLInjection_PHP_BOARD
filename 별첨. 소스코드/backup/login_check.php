﻿<?php

if(!session_id()) session_start(); // 세션
include ("connect.php"); // DB접속

$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드

$query = "select * from test where id='$id' and pw='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

//if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login
if($id==$_POST['id'] && $pw==$_POST['pw']){ // id와 pw가 맞다면 login

 $_SESSION['id']=$row['id'];
 $_SESSION['name']=$row['name'];
 //$_SESSION['name']=$row['name'];

   echo "<script>location.href='login.php';</script>";

}else{ // id 또는 pw가 다르다면 login 폼으로

   echo "<script>window.alert('잘못된 아이디 또는 비밀번호 입니다.');</script>";
   echo "<script>location.href='login.php';</script>";

}

?>
