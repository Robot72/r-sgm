<?php
if(! function_exists('breadcrumbs')) {
    /**
     * Генерирует верстку xлебных крошек на bootstrap.
     * 
     * Пример использования(вызов во view):
     * breadcrumbs([
     *     ['url' => '/сomponent/category', 'label' => 'Категория']
     *     ['url' => '/component/item', 'label' => 'Элемент', 'active' => TRUE]
     * ]);
     * 
     * @author Robert Kuznetsov
     * @param array $items элементы хлебных крошек
     */
    function breadcrumbs($items)
    {
        $html = '<ol class="breadcrumb">';
        foreach($items as $item) {
            if(isset($item['active']) && $item['active'] == TRUE) {
                $class_active = ' class="active"';
            } else {
                $class_active = '';
            }
            $html .= '<li' . $class_active . '><a href="' . $item['url'] . '">' .
                    $item['label'] . '</a></li>';
        }
        $html .= '</ol>';
        echo $html;
    }
}