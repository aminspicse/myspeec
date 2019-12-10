<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once dirname(__FILE__).'libraries/tcpdf/tcpdf.php';

    class CvPdfCompanyController extends CI_Controller
    {
        public $tbls = '';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('company/CvPdfCompany');
            $this->load->library('PDF');

            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }

        public function download_cv($user_id)
        {
            $userinfo = $this->CvPdfCompany->fetch_user($user_id);
            if($userinfo->num_rows() > 0)
            {
                foreach ($userinfo->result() as $user) 
                {
                    $pdf = new PDF('P','mm','A4',true,'UTF-8',false);
                    $pdf->SetCreator('MD. AL AMIN');
                    $pdf->SetSubject('CV');
                    $pdf->SetTitle($user->fname.' '.$user->lname);
                    $pdf->setPrintHeader(false);
                    $pdf->AddPage();

                    $pdf->SetFont('Helvetica','',26);
                    $pdf->writeHTML('<p style="font-family: verdana">'.$user->fname.' <b>'.$user->lname.'</b></p>',true,false,false,false,'C');
                    $pdf->SetFont('Helvetica','',11);
                    $pdf->writeHTML($user->present_address,true,false,false,false,'C');
                    $pdf->writeHTML('<u>mobile: '.$user->phone.', e-mail: '.$user->username.'</u>', true, false, false, false, 'C');
                
                    $pdf->Output('I');
                }
            }
            else
            {
                //$pdf->SetFont('helvetica','b','20');
                //$pdf->Cell(190,10,'Currently This user is not found');
                echo "not found";
            }
        }
        

    }