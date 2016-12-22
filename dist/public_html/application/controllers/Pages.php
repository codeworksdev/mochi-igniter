<?php
defined('BASEPATH') or exit;

/*
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
*/

class Pages extends CI_Controller
{
    const MY_APP_AUTHOR  = 'CODEWORKS';
    const MY_APP_NAME    = 'Mochi Igniter Web Application';
    const MY_APP_VERSION = '1.0';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('mochi');
        $this->load->model('pages_model');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();
        else
        {
            $data = array(
                'mochi' => $this->mochi->get_page_meta($this, $page)
                );

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
    }
}
