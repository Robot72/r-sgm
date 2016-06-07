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
        } else if( !strcmp($uri, 'videos.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'videos.html', 'label' => 'Видео', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'lexio.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'lexio.html', 'label' => 'Лекции', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'publications.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'publications.html', 'label' => 'Публикации', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'KursSGM.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'KursSGM.html', 'label' => 'Занятия саногенным мышлением — курс СГМ', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'narodovlastie.html') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'narodovlastie.html', 'label' => 'СГМ и общество — Прямое народовластие. "Об оздоровлении государства"', 'active' => FALSE),
            ));
        }
    }
    
    public static function navbar($uri)
    {
        $active =  ' class="active"';
        $item1 = $uri == '' || !strcmp($uri, 'index.html') ? $active : '' ;
        $item2 = !strcmp($uri, 'news.html') ? $active : '' ;
        $item3 = !strcmp($uri, 'books.html') ? $active : '' ;
        $item4 = !strcmp($uri, 'videos.html') ? $active : '' ;
        $item5 = !strcmp($uri, 'lexio.html') ? $active : '' ;
        $item6 = !strcmp($uri, 'publications.html') ? $active : '' ;
        $item7 = !strcmp($uri, 'KursSGM.html') ? $active : '' ;
        $item8 = !strcmp($uri, 'narodovlastie.html') ? $active : '' ;
        $html = '<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li' . $item1 . '><a href="index.html">Главная</a></li>
                <li' . $item2 . '><a href="news.html">Рекомендуем</a></li>
                <li' . $item3 . '><a href="books.html">Книги</a></li>
                <li' . $item4 . '><a href="videos.html">Видео</a></li>
                <li' . $item5 . '><a href="lexio.html">Лекции</a></li>
                <li' . $item6 . '><a href="publications.html">Публикации</a></li>
                <li' . $item7 . '><a href="KursSGM.html">Занятия</a></li>
                <li' . $item8 . '><a href="narodovlastie.html">СГМ и общество</a></li>
            </ul>                        
        </div><!--/.nav-collapse -->';
        echo $html;
    }

}
