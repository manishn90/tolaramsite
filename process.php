<?php

    $to = "bayu@colorblindlabs.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message sent from visitor on Tolaram.com";

    $fields = array(); 
    $fields{"Name"} = "name";
    $fields{"Email"} = "email";
    $fields{"Phone"} = "phone";
    $fields{"Message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>