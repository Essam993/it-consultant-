<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];


$message_sent =         "Name: ". $name. "\n".
                        "email: ".$email. "\n".
                        "subject: ".$subject. "\n".
                        "message: ".$msg;

                        mail('ahm.essam993@gmail.com','Client request',$message_sent,'from: noreply@itambition.com');

                        header("Location: http://www.toys.itambition.com");

?>
