<?php 

$name_error = $email_error = $subject_error = $ message_error = "";
$name = $email = $subject = $message = "";

// submitted using the server request method

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['name'])) {
    $name_error = "Name is required";
  }

  else{
    $name = test_input($_POST['name'])
  }

}

 ?>