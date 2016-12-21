<?php
defined('BASEPATH') or exit;

/*
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
*/

class Mochi
{
    protected $CI;

    const VERSION_DATE    = '2016-12-20';
    const VERSION_DECIMAL = '1.0';
    const VERSION_NUMBER  = '1.0.0';
    const VERSION_TYPE    = 'stable';

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function get_page_meta($page, CI_Controller &$controller)
    {
        return (object) array(
            'jsOnloadPage' => 'frontend/js/pages/'.$page.'.js',
            'pageTitle'    => $controller->pages_model->get_page_title($page),
            'viewName'     => $page
            );
    }

    public function get_version($k = 'decimal')
    {
        if (
          $k
          && preg_match('/^[a-z]\w*$/i',$k))
        {
            $v = (object) array(
                'date'    => self::VERSION_DATE,
                'decimal' => self::VERSION_DECIMAL,
                'number'  => self::VERSION_NUMBER,
                'type'    => self::VERSION_TYPE
                );

            switch ($k)
            {
                default:
                return $v->$k;
                break;

                case 'full':
                return $v->number.'.'.str_replace('-','',$v->date).'-'.$v->type;
                break;
            }
        }

        return;
    }
}
