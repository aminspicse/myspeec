<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once dirname(__FILE__).'libraries/tcpdf/tcpdf.php';

    class CvPdfControllerUser extends CI_Controller
    {
        public $tbls = '';

        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/CvPdf');
            $this->load->library('form_validation');
            $this->load->model('users/Profile');
            $this->load->library('PDF');

            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }

        public function download_cv()
        {
            $pdf = new PDF('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetCreator('MD. AL AMIN');
            $pdf->SetSubject('User CV');
            $pdf->SetTitle($this->session->userdata('fname').' '.$this->session->userdata('lname'));
            $pdf->setPrintHeader(FALSE);
            $pdf->SetTopMargin(10);
            
            $pdf->AddPage();
            $personalinfo =  $this->Profile->profile();

            foreach($personalinfo->result() as $row)
            {
                $pdf->SetFont('Helvetica','',26);
                $pdf->writeHTML('<p style="font-family: verdana">'.$row->fname.' <b>'.$row->lname.'</b></p>',true,false,false,false,'C');
                $pdf->SetFont('Helvetica','',11);
                $pdf->writeHTML($row->present_address,true,false,false,false,'C');
                $pdf->writeHTML('<u>mobile: '.$row->phone.', e-mail: '.$row->username.'</u>', true, false, false, false, 'C');
                //$pdf->writeHTML('<b>Email: </b>'.$row->username.'<hr>', true, false, false, false, 'C');
            }
            
            $html = '<style> <link href='.base_url('assets/users/bootstrap/bootstrap.min.css'.'></style>');
            $html .= '<table cellspacing="0" cellpadding="1" border="2">';
            
            // start -- to print user about
            $aboutinfo = $this->CvPdf->fetch_data_for_view_admin('user_about','about_id', $this->session->userdata('user_id')); // fetch user about
            $html .= '<tr><td width=""><b>ABOUT SELF</b></td></tr>';
            foreach($aboutinfo->result() as $ab)
            {
                $html .= '
                <tr>
                <td Width="90px"></td>
                <td style="text-align: justify">'.$ab->about_self.'</td>
                </tr>
                ';
            }
            // end -- user about
            $html .= '<hr>'; // for print a horizontal line 
            // start -- print user experience 
            $experience = $this->CvPdf->fetch_data_for_view_admin('user_experience','experience_id',$this->session->userdata('user_id'));//fetching user experience
            $html .= '<tr><td width=""><b>WORK EXPERIENCE</b></td></tr>';
            foreach ($experience->result() as $exp) 
            {
                if($exp->to_date != null)
                {
                    $to = $exp->to_date;
                }
                else
                {
                    $to = 'contenue';
                }
                $html .= '
                    <tr style="margin-top: 0px">
                        <td width="90px"></td>
                        <td style="text-align: justify; font-size: 12px"><b>'.$exp->job_position.', '.$exp->company_name.', '.$exp->company_location.'</b></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>from: <b>'.$exp->from_date.'</b> to: <b>'.$to.'</b></td>
                    </tr>
                ';
            }
            // end -- print user experience 
            $html .= '<hr>';
            // start -- print user education 
            $education = $this->CvPdf->fetch_data_for_view_admin('user_education','education_id',$this->session->userdata('user_id')); // fetch education
            $html .= '<tr><td><b>EDUCATION</b></td></tr>';
            foreach ($education->result() as $edu) 
            {
                if($edu->to_date != null)
                {
                    $to = $edu->to_date;
                }
                else
                {
                    $to = 'continue';
                }
                $html .= '
                    <tr>
                    <td></td>
                    <td style="font-size: 12px"><b>'.$edu->degree.', '.$edu->department.',</b> '.$edu->institute.'</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td style="text-align: justify">from: <b>'.$edu->from_date.'</b> to: <b>'.$to.'</b></td>
                    </tr>
                ';
            }
            // end -- print user education 
            $html .= '<hr>';
            // start -- to print user treaning 
            $training = $this->CvPdf->fetch_data_for_view_admin('user_training','training_id',$this->session->userdata('user_id')); // fetch user training
            if($training->num_rows()>0)
            {
                $html .= '<tr><td><b>TREANING</b></td></tr>';
                foreach ($training->result() as $tr) 
                {
                    if($tr->to_date != null)
                    {
                        $to = $tr->to_date;
                    }
                    else
                    {
                        $to = 'contenue';
                    }
                    $html .= '
                        <tr>
                        <td></td>
                        <td style="font-size: 12px"><b>'.$tr->training_title.$tr->training_label.',</b> '.$tr->training_institute.'</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td>from: <b>'.$tr->from_date.'</b> to: <b>'.$to.'</b></td>
                        </tr>
                    ';
                }
            }
            // end -- print user treaning 
            $html .= '<hr>';
            // start -- print user skill 
            $skill = $this->CvPdf->fetch_data_for_view_admin('user_skill','skill_id',$this->session->userdata('user_id')); // fetching skill
            if($skill->num_rows() > 0)
            {
                $html .= '<tr><td collspan="2"><b>SKILLS</b></td></tr>';
                foreach ($skill->result() as $skill)
                {
                    $html .= '
                        <tr>
                        <td></td>
                        <td>'.$skill->skill_name.$skill->skill_label.'</td>
                        </tr>
                    ';
                }
            }
            // end print skill
            $html .= '<hr>';
            //$html .= '<tr><td><b>REFERENCES</b></td></tr>';
            $html .= '<table>';

            $pdf->writeHTML($html, true, false, false, false, '');
            $pdf->Cell(30,20,'',0,0);
            //$pdf->Cell(80,20,'',1,0);
            $pdf->Cell(160,15,'',1,1);
            $pdf->Output($this->session->userdata('fname').' '.$this->session->userdata('lname').'_CV','D');
        }

    }