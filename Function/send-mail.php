<?php
        
        
        /* $to = "mareksmarda2@seznam.cz";
        $subject = "Helpdesk Request";
        $message = 'Problem: <br>'.$issue;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $message_id = "<" . uniqid() . "@" . $_SERVER['SERVER_NAME'] . ">";
        $headers .= "Message-ID: " . $message_id . "\r\n";
        $headers .= 'Od: ' .$name." ".$surname . "\r\n";
        $mail = mail($to,$subject,$message,$headers);
        */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'] ?? 'Jmeno'; 
            $surname = $_POST['surname'] ?? 'Prijmeni';
            $issue = $_POST['issue'] ?? 'Problem';
            header("Location: ../helpdesk_form.php?status=success");
            exit();
        } 
        ?>
