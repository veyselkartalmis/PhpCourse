<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $mail = new PHPMailer(true);
    try{
        //Maili gönderen kişi
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'write ur mail';
        $mail->Password = 'write ur password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        //Maili alan kişi
        $mail->setFrom('write ur mail', 'Udemy Kurs Denemesi');
        //Maili alacak olan adres
        $mail->addAddress('veyselkartalms@gmail.com');
        //Eğer mesaja geri dönülecekse onun gideceği adres
        $mail->addReplyTo('write ur mail', 'Merhaba');

        //Mail içeriği
        $mail->isHTML(true);
        $mail->Subject = 'Udemy - Kurs Deneme Mailişş';
        $mail->Body = 'Merhaba, Burada içerik var.';

        $mail->send();
    
        echo "Mail gönderme başarılı";
    } catch(Exception $e){
        echo $e->errorMessage();
    }

?>