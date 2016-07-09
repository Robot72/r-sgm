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
        } else if( !strcmp($uri, 'obida-vina') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Обида. Вина"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'kak-berech-ljubov') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Как беречь любовь"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'sanogennoe-myshlenie') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Саногенное (оздоравливающее) мышление"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'iscelenie-filosofiej') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Исцеление философией"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'nauchenie-stanovlenie-cheloveka') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Научение. Становление человека"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'styd-zavist') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books.html', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Стыд. Зависть"', 'active' => FALSE),
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
        $item9 = !strcmp($uri, 'styd-zavist') ? $active : '' ;
        $item10 = !strcmp($uri, 'nauchenie-stanovlenie-cheloveka') ? $active : '' ;
        $item11 = !strcmp($uri, 'iscelenie-filosofiej') ? $active : '' ;
        $item12 = !strcmp($uri, 'sanogennoe-myshlenie') ? $active : '' ;
        $item13 = !strcmp($uri, 'obida-vina') ? $active : '' ;
        $item14 = !strcmp($uri, 'kak-berech-ljubov') ? $active : '' ;
        $html = '<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li' . $item1 . '><a href="index.html">Главная</a></li>
                <li' . $item2 . '><a href="news.html">Рекомендуем</a></li>
                <li' . $item3.$item9.$item10.$item11.$item12.$item13.$item14.'>. $item<a href="books.html">Книги</a></li>
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
