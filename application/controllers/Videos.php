<?php

    class Videos extends CI_Controller{
        public function __construct(){
            parent::__construct();

        }

        function index(){
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('videos/index.php');
        }


        public function send_mail()
    {
        require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "aminspicse@gmail.com";  // user email address
        $mail->Password   = "amin766855";            // password in GMail
        $mail->SetFrom('aminspicse@gmail.com', 'Mail');  //Who is sending 
        $mail->isHTML(true);
        $mail->Subject    = "Mail Subject";
        $mail->Body      = '
            <html>
            <head>
                <title>Title</title>
            </head>
            <body>
            <h3>Heading</h3>
            <p>Message Body</p><br>
            <p>With Regards</p>
            <p>Your Name</p>
            </body>
            </html>
        ';
        $destino = "amin766855@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
            return false;
        } else {
            return true;
        }
    }


    }
?>