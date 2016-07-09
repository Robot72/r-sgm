<?php

class Breadcrumbs
{

    public static function generate()
    {
        //Главная страница
        if ($uri == '' || !strcmp($uri, 'index.html')) {
            breadcrumbs(array(
                array('url' => 'index.html', 'label' => 'Главная'),
            ));
        }
    }

}
