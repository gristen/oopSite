<?php

namespace app\Views;

class Views
{

    function generate($content_view)
    {
        
        include 'views/pages/'.$content_view;
    }

}