<?php
    $to = 'demo@spondonit.com';
    $name = $_POST["name"];
    $type= $_POST["type"];
    $email = $_POST["email"];
    $amound = $_POST["amound"];
    $message_content = $_POST["message"];




    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name:  '.$name.'</td>
        </tr>
        <tr><td>Type: '.$type.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Amount: '.$amound.'</td></tr>  
        <tr><td>Message: '.$message_content.'</td></tr>

    </table>';

    if (@mail($to, "New Message from Website", $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed to send the message.';
    }

?>
