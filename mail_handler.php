<?php 
if(isset($_POST['submit'])){
    $to = "contact@danxingdao.org"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['first_name'];
    $subject = "User Feedback " . $name;
    $subject2 = "感谢您给单行道的反馈";
    //$message = $from . " " . $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message = $name . "(" . $from . ") wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = $name . ",您好！\n\n  我们已经收到您给我们的留言：\n\n" . $_POST['message'];
    //$message = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
