<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $street = mysqli_real_escape_string($conn, $_POST['street']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   $province = mysqli_real_escape_string($conn, $_POST['province']);
   $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
   $note = mysqli_real_escape_string($conn, $_POST['note']);
   // for password $pass = md5($_POST['password']);
   // for password $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

 //  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  // $result = mysqli_query($conn, $select);

  // }else{
      
  $insert = "INSERT INTO deliveries (name, contactno, email, street, city, province, postalcode, note) VALUES('$name','$contacno','$email','$street', '$city', '$province', '$postalcode', '$note')";
  mysqli_query($conn, $insert);
  header('location:1htmltemplates\deliveryform.php');
   };
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Delivery</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/deliverystyles.css') }}">
    <!-- <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #5a7233;
      }
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      background: #5a7233;
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid #3e4f24;
      background: #5a7233; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #3e4f24;
      } 
      @media (min-width: 568px) {
      form {
      width: 60%;
      }
      }
    </style> -->
  </head>
  <body>
    <form action="/" class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Delivery Form</h1>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="contactno" placeholder="Contact No.">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="street" placeholder="No./Street/Purok/Subdivision">
        <input type="text" name="city" placeholder="City">
        <input type="text" name="province" placeholder="Province">
        <input type="text" name="postalcode" placeholder="Postal Code">
        <textarea placeholder="Delivery Note" name="note" rows="5"></textarea>
        <button type="submit" name="submit" href="/">Submit</button>
      </div>
    </form>
  </body>
</html>