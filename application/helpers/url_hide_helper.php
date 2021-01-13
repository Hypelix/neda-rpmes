<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('anchor_hide_text'))
{
    function anchor_hide_text($uri = '', $title = '', $attributes = '')
    {
        $title = (string) $title;

        if ( ! is_array($uri))
        {
            $site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
        }
        else
        {
            $site_url = site_url($uri);
        }

        if ($attributes != '')
        {
            $attributes = _parse_attributes($attributes);
        }

        return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
    }
}