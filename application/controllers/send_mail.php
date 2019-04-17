<?php 

    class send_mail extends CI_Controller{

        public function user_agent(){
            $this->load->library('user_agent');
            echo $this->agent->browser();
            echo $this->agent->version();
            echo $this->agent->platform();
            echo $this->input->ip_address();



            $ip = $_SERVER['REMOTE_ADDR'];
            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
            echo $details->city;
        }
        public function mail(){
           // $this->load->helper('email');
            $this->load->library('email');
            //$this->load->library('session');
            $config = Array(
                'protocol' => 'gmail',
                'smtp_host' => 'ssl://googlemail.com',
                'smtp_port' => 587,
                'smtp_user' => 'aminspicse@gmail.com',
                'smtp_pass' => 'Amin766855@gmail.com'
            );
  
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
        
            $this->email->from("aminspicse@gmail.com");
            $this->email->to("csebd66@gmail.com");
            $this->email->subject("Email with Codeigniter");
            $this->email->message("This is email has been sent with Codeigniter");
        
            if($this->email->send())
            {
                echo "Your email was sent.!";
            } else {
                show_error($this->email->print_debugger());
            }
        }
        public function hi(){

            
            $this->load->library('email');

            $this->email->from("aminspicse@email.com");
            $this->email->reply_to("aminspicse@email.com");
            $this->email->to("csebd66@email.com");
            $this->email->subject("Test mail");
            $this->email->message("Email body");
            $this->email->set_alt_message("Email body txt");
            if($this->email->send()){
                echo "Success";
            }else{
                show_error($this->email->print_debugger());
            }
        }
        public function send(){
            $this->load->library('email');
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 25,
                'smtp_timeout' => 7,
                'smtp_user' => 'aminspicse@gmail.com', // change it to yours
                'smtp_pass' => 'Amin766855@gmail.com', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE,
                'validation' => false
              );
              
                      $message = '';
                      $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('aminspicse@gmail.com'); // change it to yours
                    $this->email->to('csebd66@gmail.com');// change it to yours
                    $this->email->subject('Resume from JobsBuddy for your Job posting');
                    $this->email->message($message);
                    if($this->email->send())
                   {
                    echo 'Email sent.';
                   }
                   else
                  {
                   show_error($this->email->print_debugger());
                  }
        }

        public function index(){
            //Load email library
            $this->load->library('email');

            //SMTP & mail configuration
          /*  $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'aminspicse@gmail.com',
                'smtp_pass' => 'Amin766855@gmail.com',
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'smtp_crypto' => 'ssl'
            );
            */
            $config['useragent'] = 'CodeIgniter';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.google.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'aminspicse@gmail.com';
        $config['smtp_pass'] = 'Amin766855@gmail.com';
        $config['smtp_timeout'] = 50;
        $config['wordwrap'] = TRUE;
        $config['wrapchars'] = 76;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['validate'] = FALSE;
        $config['priority'] = 3;
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $config['bcc_batch_mode'] = FALSE;
        $config['bcc_batch_size'] = 200;

            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");

            //Email content
            $htmlContent = '<h1>Sending email via SMTP server</h1>';
            $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

            $this->email->to('csebd66@gmail.com');
            $this->email->from('aminspicse@gmail.com','MyWebsite');
            $this->email->subject('How to send email via SMTP server in CodeIgniter');
            $this->email->message($htmlContent);

            //Send email
            $this->email->send();
            echo $this->email->print_debugger();
        }
    }
?>