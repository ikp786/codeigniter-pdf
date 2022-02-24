<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function index()
    {
        $this->load->library('pdf');
        $html = $this->load->view('pdf', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>