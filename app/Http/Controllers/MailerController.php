<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller
{
    //
    public function email()
    {
        return view("email");
    }
    public function composeEmail(Request $request)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        // $request emailCc emailBcc emailRecipient emailSubject emailBody

        $Cc = $request->emailCc;
        $Bcc = $request->emailBcc;
        $Recipient = $request->emailRecipient;
        $subject = $request->emailSubject;
        $body = $request->emailBody;
        

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->host ='mail.yoswindran.web.id';
        $mail->SMTPAuth = true;
        $mail->Username = 'halo-aviators@yoswindran.web.id';
        $mail->Password = 'keepithooman31';
        // $mail->SMTPSecure = 'ssl';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Port = 587;
        $mail->setFrom('halo-aviators@yoswindran.web.id');
        $mail->addAddress($Recipient);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->SMTPDebug = 1;
        $send = $mail->send();

        if($send)
        {
            echo "email has been sent succesfully";
        }else{
            echo "Something went wrong";
        }
    }
}
