<?php 

  $name = $email = $subject = $message = $success = '';
  $name_error = $email_error = $subject_error = $message_error = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
      $name_error = "Name is required";
    } else {
      $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $name_error = "Only letters and white spaces allowed";
      }
    }

    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
      $email = test_input($_POST['email']);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "A valid email address required";
      } 
    }


    if (empty($_POST["subject"])) {
      $subject_error = "Subject is required";
    } else {
      $subject = test_input($_POST["subject"]);

      if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
        $subject_error = "Only letters and white spaces allowed";
      }
    }
    
    if (empty($_POST["message"])) {
      $message_error = "Message field required";
    } else {
      $message = test_input($message);

      if ($message = "") {
        $message_error = "Message cannot be empty";
      }
    }



    if ($name_error == '' && $email_error == '' && $subject_error == '' && $message_error == '' ) {
      $message_body = '';
      unset($_POST["submit"]);

      foreach ($_POST as $key => $value) {
        $message_body .= "$key : $value\n";
      }

      $to = "accomodation@lauguesthouse.co.ke";

      $subject = $_POST['subject'];

      if (mail($to, $subject, $message)) {
        $msgClass = "success";
        $success = "Message sent, thankyou for contacting us";
        $name = $email = $subject = $message ='';
      } else {
        $msgClass = "error";
        $success = "Sorry an error occured while sending message , try again later.";
      }

    }
    

  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 ?>