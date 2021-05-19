<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\EmailVerification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class LoginController extends Controller
{
    //
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('profile');
        }
        return redirect('profile');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    public function signup(Request $request)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        // $request emailCc emailBcc emailRecipient emailSubject emailBody

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Enter your name',
            'name.max' => 'Your name must be shorter than 255 characters.',
            'email.required' => 'You must enter your email',
            'email.unique' =>'This email has already registered',
            'phone.required' => 'You must enter you number phone',
            'phone.unique' => 'This phone number has already registered',
            'password.required' => 'You must enter your password',
            'password.min' => 'Your password must be more than 6 characters.',
        ]);
        $token = hash('sha256', md5(date('Y-m-d'))) ;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'member',
            'token' => $token,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Sending Email Verification
        $Recipient = $request->email;
        $name = $request->name;
        // Verification ID
        $phone = $request->phone;
        $subject  = 'Verification User Pre in Post Aviation Services';
        $body = '<html> <!-- #A3D0F8 -->
	    <body style="color: #000; font-size: 16px; text-decoration: none;background-color: #efefef;">
                
                <div id="wrapper" style="max-width: 600px; margin: auto auto; padding: 20px;">
                    
                    <div id="logo" style="">
                        <center><h1 style="margin: 0px;"><a href="https:://yoswindran.web.id" target="_blank"><img style="max-height: 75px;" src="{EMAIL_LOGO}"></a></h1></center>
                    </div>
                        
                    <div id="content" style="font-size: 16px; padding: 25px; background-color: #fff;
                        moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -khtml-border-radius: 10px;
                        border-color: #A3D0F8; border-width: 4px 1px; border-style: solid;">

                        <h1 style="font-size: 22px;"><center>EMAIL VERIFICATION PRE IN POST AVIATION SERVICES</center></h1>
                        
                        <h4>Hello!</h4><p> '.$name.',</p>

                        <p>Anda menerima email ini karena telah melakukan registrasi di situs Pre in Post Aviation Services. Masukkan kode berikut untuk memverifikasi akun anda: </p>
                        <br>
                        <p>Thank you for signing up in Pre in Post Aviation Services!</p>
                        <p>Enter this verification code on the member pre in post aviation services registration page where you requested the code. </p>
                        <h5><b>'.$token.'</b></h5>

                        <p>
                        Welcome and happy building!
                        <br>
                        Thank you </p>
                        
                        <h5>Yos Susiyono Windran</h5>
                    </div>
                </div>
            </body>
        </html>';
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
        $send = $mail->send();

        return redirect('verification')->with('status','Your Account Has Succesfully Registered, Check your email to Validate it!');
    }
    public function composeEmail(Request $request)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        // $request emailCc emailBcc emailRecipient emailSubject emailBody

        $Cc = $request->emailCc;
        $Bcc = $request->emailBcc;
        
        $subject = $request->emailSubject;
        
        

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
    public function verification(){
        return view('login.verification');        
    }

    public function getVerificationCode(Request $request){
        $token =  $request->code;
        // ambil token
        // ambil user token
        $user  = DB::table('users')->where('token', '=', $token)->get();
        foreach($user as $us){
            // samakan logika, update status verifikasi
            if($token == $us->token){
                $affected = DB::table('users')
                  ->where('token', '=', $token)
                  ->update(
                    ['verified_status' => 'Verified']
                );
                return redirect('login')->with('status','Your account has been verified! Thank you!');
            }else{
                echo 'Error';
            }
        }
    }

}
