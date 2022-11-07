<?php
    require 'vendor/autoload.php';    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            $key = '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';
            //$url = 'https://api.elasticemail.com/v2/email/send';

            $email = new \sendgrid\Mail\Mail();
            //'apikey' => $key,
            $email->setForm("shari_rattigan@ymail.com", "Shari Rattigan");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/path", $content);

            $sengrid = new \SendGrid($key);

            try{
                $response = $sendgridid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>
            