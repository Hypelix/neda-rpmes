<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// ------------------------------------------------------------------------
/**
 * Random String Generator : Helper File for Codeigniter 
 * 
 * @access    public
 * @param    string
 * @param    integer
 * @return    integer
 */
if (!function_exists('dateFormat')) {
    function dateFormat($format = 'M-d-Y @ h:i:a', $givenDate = null)
    {
        return date($format, strtotime($givenDate));
    }
}


/* End of file rand_helper.php */
