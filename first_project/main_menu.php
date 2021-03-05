<?php

$menu = [
    [
        "title" => "Главная",
        "sort" => 1,
        "path" => "/",
    ],
    [
        "title" => "О нас",
        "sort" => 2,
        "path" => "/route/about/",
    ],
    [
        "title" => "Контакты",
        "sort" => 3,
        "path" => "/route/contacts/",
    ],
    [
        "title" => "Новости",
        "sort" => 4,
        "path" =>"/route/news/",
    ],
    [
        "title" => "Каталог",
        "sort" => 5,
        "path" => "/route/catalog/",
    ]
];

function arraySort($array, $key = "sort", $sort = SORT_ASC)
{
    usort($array, function($a, $b) use ($key, $sort) {
        return $sort == SORT_ASC ? $a[$key] <=> $b[$key] : -1 * ($a[$key] <=> $b[$key]);
    });
    return($array);
};

function viewMenu($array, $cssClass, $direction)
{
    $sortedArray = arraySort($array, $key = "sort", $sort = $direction);
    require $_SERVER["DOCUMENT_ROOT"]."/template_menu.php";

};

function sortString(&$string, $length = 12)
{
    return strlen($string) <= $length  ? $string: substr($string, 0, 9) . "...";
}

function viewTitle($route, $array)
{
    foreach ($array as $item) {
        $key = array_search($route, $item);
        if ($key) {
            return sortString($item["title"]);
        }
    }
}
?>