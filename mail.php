<?php
    if(isset($_POST['btn-send']))
    {
        $name = $_POST['name'];
        $email = $_Post['email'];
        $message = $_POST['message'];

        if(empty($name) || empty($email) || empty($message))
        {
            header('location: index.php?error');
        }
        else
        {
            $to = "nileshvishr@gmail.com";
            $subject = 'Portfolio form submission';

            if(mail($to,$subject,$message,$email))
            {
                header('location: index.php?success');
            }
        }
    }
?>