<?php

class Generator
{

    public static function breadcrumbs($uri)
    {
        $mainPage = array('url' => 'index.html', 'label' => 'Главная');
        if( !strcmp($uri, 'news.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'news.html', 'label' => 'Рекомендуем', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'books.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
            ));
        }
    }
    
    public static function navbar($uri)
    {
        $active =  ' class="active"';
        $item1 = $uri == '' || !strcmp($uri, 'index.html') ? $active : '' ;
        $item2 = !strcmp($uri, 'news.html') ? $active : '' ;
        $item3 = !strcmp($uri, 'books.html') ? $active : '' ;
        $html = '<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li' . $item1 . '><a href="index.html">Главная</a></li>
                <li' . $item2 . '><a href="news.html">Рекомендуем</a></li>
                <li' . $item3 . '><a href="books.html">Книги</a></li>
                <li><a href="videos.html">Видео</a></li>
                <li><a href="lexio.html">Лекции</a></li>
                <li><a href="publications.html">Публикации</a></li>
                <li><a href="KursSGM.html">Занятия</a></li>
                <li><a href="narodovlastie.html">СГМ и общество</a></li>
            </ul>                        
        </div><!--/.nav-collapse -->';
        echo $html;
    }

}
