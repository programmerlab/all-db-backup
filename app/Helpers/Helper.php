<?php

namespace App\Helpers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail,Auth,Config,View,Input;
use session,Crypt,Hash;
use Illuminate\Support\Str;
use App\User;
use Phoenix\EloquentMeta\MetaTrait; 
use Illuminate\Support\Facades\Lang;
use Validator;  
use PHPMailerAutoload;
use PHPMailer; 
 

class Helper {

    /**
     * function used to check stock in kit
     *
     * @param = null
     */
    
    public static function generateRandomString($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

         return $key;
    } 
 
 
/* @method : isUserExist
    * @param : user_id
    * Response : number
    * Return : count
    */
    static public function isUserExist($user_id=null)
    {
        $user = User::where('userID',$user_id)->count(); 
        return $user;
    }
  

   /* @method : get user details
    * @param : userid
    * Response : json
    * Return : User details 
   */
   
    public static function getUserDetails($user_id=null)
    {
        $user = User::find($user_id);
        $data['userID'] = $user->userID;
        $data['firstName'] = $user->first_name;
        $data['lastName'] = $user->last_name;
        $data['email'] = $user->email;
         return  $data;
    }
/* @method : send Mail
    * @param : email
    * Response :  
    * Return : true or false
    */
    public  function sendMailFrontEnd($email_content, $template, $template_content)
    {        
        $template_content['verification_token'] =  Hash::make($email_content['receipent_email']);
        $template_content['email'] = isset($email_content['receipent_email'])?$email_content['receipent_email']:'';
        
        return  Mail::send('emails.'.$template, array('content' => $template_content), function($message) use($email_content)
          {
            $name = "Admin";
            $message->from('admin@admin.com',$name);  
            $message->to($email_content['receipent_email'])->subject($email_content['subject']);
            
          });
    } 


   public  static function sendMail($email_content, $template, $template_content)
    {        
        Helper::sendEmail( $email_content, $template, $template_content);

        /*return  Mail::send('emails.'.$template, array('data' => $template_content), function($message) use($email_content)
          {
            $name = "ShoperSquare";
            $message->from('noReply@shopersquare.com',$name);  
            $message->to($email_content['receipent_email'])->subject($email_content['subject']);
            $message->cc('info@shopersquare.com', 'ShoperSquare');
            $message->bcc('vaibhavdeveloper2014@gmail.com', 'ShoperSquare');
            
          });*/
    } 


    public static function sendEmail( $email_content, $template, $template_content)
    {
        $mail = new PHPMailer;
        $html = view::make('emails.invoice',['data' => $template_content]);
        $html = $html->render(); 

        try {
            $mail->isSMTP(); // tell to use smtp
            $mail->CharSet = "utf-8"; // set charset to utf8
             

            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->Host       = "mail.guruhomeshops.com"; // sets the SMTP server
            $mail->Port       = 587;   
            $mail->SMTPSecure = 'false';                 // set the SMTP port for the GMAIL server
            $mail->Username   = "admin@guruhomeshops.com"; // SMTP account username
            $mail->Password   = "admin@123!"; 

            $mail->setFrom("admin@shopersquare.com", "guruhomeshops.com");
            $mail->Subject = "Invoice";
            $mail->MsgHTML($html);
            $mail->addAddress($email_content['receipent_email'], "Shopersquare");
            $mail->addAddress("kroy.iips@gmail.com","guruhomeshops"); 
            $mail->addAddress("guruhomeshop1983@gmail.com","guruhomeshop");
            //$mail->addReplyTo(‘examle@examle.net’, ‘Information’);
            //$mail->addBCC(‘examle@examle.net’);
            //$mail->addAttachment(‘/home/kundan/Desktop/abc.doc’, ‘abc.doc’); // Optional name
            $mail->SMTPOptions= array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );

            $mail->send();
            //echo "success";
            } catch (phpmailerException $e) {
             
            } catch (Exception $e) {
             
            }
         
       
    }
 
}
