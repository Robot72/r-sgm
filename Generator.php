<?php

class Generator
{

    public static function breadcrumbs($uri)
    {
        $mainPage = array('url' => 'index', 'label' => 'Главная');
        if( !strcmp($uri, 'news') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'news', 'label' => 'Рекомендуем', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'books') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'videos') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'videos', 'label' => 'Видео', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'lexio') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'lexio', 'label' => 'Лекции', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'publications') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'publications', 'label' => 'Публикации', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'KursSGM') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'KursSGM', 'label' => 'Занятия саногенным мышлением — курс СГМ', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'narodovlastie') ) {
            breadcrumbs(array(
                $mainPage, array('url' => 'narodovlastie', 'label' => 'СГМ и общество — Прямое народовластие. "Об оздоровлении государства"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'obida-vina') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Обида. Вина"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'kak-berech-ljubov') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Как беречь любовь"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'sanogennoe-myshlenie') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Саногенное (оздоравливающее) мышление"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'iscelenie-filosofiej') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Исцеление философией"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'nauchenie-stanovlenie-cheloveka') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Научение. Становление человека"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'styd-zavist') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => '"Стыд. Зависть"', 'active' => FALSE),
            ));
        } else if( !strcmp($uri, 'obida-broshura') ) {
            breadcrumbs(array(
                $mainPage, 
                array('url' => 'books', 'label' => 'Книги', 'active' => FALSE),
                array('url' => '#', 'label' => 'Обида-брошюра', 'active' => FALSE),
            ));
        }
    }
    
    public static function navbar($uri)
    {
        $active =  ' class="active"';
        $item1 = $uri == '' || !strcmp($uri, 'index') ? $active : '' ;
        $item2 = !strcmp($uri, 'news') ? $active : '' ;
        $item3 = !strcmp($uri, 'books') ? $active : '' ;
        $item4 = !strcmp($uri, 'videos') ? $active : '' ;
        $item5 = !strcmp($uri, 'lexio') ? $active : '' ;
        $item6 = !strcmp($uri, 'publications') ? $active : '' ;
        $item7 = !strcmp($uri, 'KursSGM') ? $active : '' ;
        $item8 = !strcmp($uri, 'narodovlastie') ? $active : '' ;
        $item9 = !strcmp($uri, 'styd-zavist') ? $active : '' ;
        $item10 = !strcmp($uri, 'nauchenie-stanovlenie-cheloveka') ? $active : '' ;
        $item11 = !strcmp($uri, 'iscelenie-filosofiej') ? $active : '' ;
        $item12 = !strcmp($uri, 'sanogennoe-myshlenie') ? $active : '' ;
        $item13 = !strcmp($uri, 'obida-vina') ? $active : '' ;
        $item14 = !strcmp($uri, 'kak-berech-ljubov') ? $active : '' ;
        $item15 = !strcmp($uri, 'obida-broshura') ? $active : '' ;
        $item16 = !strcmp($uri, 'upravlenie-povedeniem-broshura') ? $active : '' ;
        $html = '<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li' . $item1 . '><a href="index">Главная</a></li>
                <li' . $item2 . '><a href="news">Рекомендуем</a></li>
                <li' . $item3.$item9.$item10.$item11.$item12.$item13.$item14.
                $item15.$item16.'><a href="books">Книги</a></li>
                <li' . $item4 . '><a href="videos">Видео</a></li>
                <li' . $item5 . '><a href="lexio">Лекции</a></li>
                <li' . $item6 . '><a href="publications">Публикации</a></li>
                <li' . $item7 . '><a href="KursSGM">Занятия</a></li>
                <li' . $item8 . '><a href="narodovlastie">СГМ и общество</a></li>
            </ul>                        
        </div><!--/.nav-collapse -->';
        echo $html;
    }

}
