<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once dirname(__FILE__).'/tcpdf/tcpdf.php';
class PDF extends TCPDF{
    public function __construct(){
        parent::__construct();
    }

    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(150,5,'Powered By www.myspeec.com',0,0);
        $this->Cell(40, 5, $this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}