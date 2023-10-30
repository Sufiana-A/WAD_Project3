<?php

//insert
//get data from form
//place di variabel
//create query
//execute
//uts sampe create
//bobot php 50% get post
$conn = mysqli_connect("localhost","root","","wad project 3");
$result = mysqli_query($conn,"SELECT*FROM students");
var_dump($result);
//mysqli_fetch_row($result);
//mysqli_fetch_assoc($result);
//mysqli_fetch_array($result);
//mysqli_fetch_object($result);
var_dump(mysqli_fetch_object($result));


?>