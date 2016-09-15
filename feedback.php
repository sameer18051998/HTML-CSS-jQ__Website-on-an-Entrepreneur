<?php
$action=$_POST['reviewing'];
               /* send the submitted data */
    
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $message=$_POST['rev'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("sameer18051998@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    
?>
                        