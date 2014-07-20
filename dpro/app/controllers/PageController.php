<?php

class PageController
{

    function get($slug = 'index')
    {
        $view_file = 'frontend/'.$slug;
        $view = m\m::view($view_file);
        return $view;
    }
    
}