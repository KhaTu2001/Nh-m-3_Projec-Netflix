<?php
     $username = 'quantrung.2k1@gmail.com';
     $password = 'szqirlbqvcblomap';
    //khai bao
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
    //2.su dung 
    function generatePassword() {

        $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
        $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
        $_numerics   = '1234567890';                            // numerics
        $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters
    
        $_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;   // Contains all characters
        $pass1 = '';         // will contain the desired pass
    
        for($i = 0; $i < 10; $i++) {                                 // Loop till the length mentioned
            $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
            $pass1 .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
        }
    
        return $pass1;       // Returns the generated Pass
    }

//Create an instance; passing `true` enables exceptions
function sendMail($email,$test,$body){
    global $username;
    global $password;
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                     //SMTP username
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet    = 'utf-8';


        //Recipients
        $mail->setFrom($username, 'Netflix');
        //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress($email);               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $test;
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        $error = "Email đã tồn tại";
        return false;
    }
    return false;
}
?>
