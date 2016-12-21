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
        $this->load->model('pages_model');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();
        else
        {
            $data = array(
                'mochi' => (object) array(
                    'jsOnloadPage' => 'frontend/js/pages/'.$page.'.js',
                    'pageTitle'    => $this->pages_model->get_page_title($page),
                    'version'      => '1.0.0',
                    'viewName'     => $page,
                    )
                );

            $this->load->view( 'templates/header', $data );
            $this->load->view( 'pages/'.$page    , $data );
            $this->load->view( 'templates/footer', $data );
        }
    }
}
