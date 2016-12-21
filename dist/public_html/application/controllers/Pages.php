<?php
defined('BASEPATH') or exit;

/*
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
*/

class Pages extends CI_Controller
{
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
                'mochi' => $this->mochi->get_page_meta($page, $this)
                );

            $this->load->view( 'templates/header', $data );
            $this->load->view( 'pages/'.$page    , $data );
            $this->load->view( 'templates/footer', $data );
        }
    }
}
