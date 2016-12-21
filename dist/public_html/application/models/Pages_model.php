<?php
defined('BASEPATH') or exit;

/*
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
*/

class Pages_model extends CI_Model
{
    const MY_APP_AUTHOR  = 'CODEWORKS';
    const MY_APP_NAME    = 'Mochi Igniter Web Application';
    const MY_APP_VERSION = '1.0';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_page_title($page = null)
    {
        $suf = self::MY_APP_NAME;
        $div = '|';

        return $page !== null
          ? ucwords(strtolower($page)).' '.$div.' '.$suf
          : $suf;
    }
}
