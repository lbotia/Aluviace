<?php 
if (isset($_POST)) {
    $to = "rdz.cristhian@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $subject = "WEB ALUVIACE - CONTACTO NUEVO";

    $message = $first_name . "  " ."Te escribio :" . "\n\n" . $_POST['mensaje'];
   
    $headers = "DE: " . $from;


    echo $to;
    echo "<BR>";
    echo $from;
    echo "<BR>";
    echo $first_name;
    echo "<BR>";
    echo $subject;
    echo "<BR>";
    echo "<BR>";
    echo $message;
    echo "<BR>";

    $res = mail($to,$subject,$message,$headers);
    echo  var_dump($res);

    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>