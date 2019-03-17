<?php 

    class send_mail extends CI_Controller{

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
        $config['smtp_host'] = 'ssl://smtp.netregistry.com.au';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'aminspicse@gmail.com';
        $config['smtp_pass'] = 'Amin766855@gmail.com';
        $config['smtp_timeout'] = 5;
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