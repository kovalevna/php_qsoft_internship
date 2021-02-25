<pre>
<?php

$menu = [
    [
        "title" => "second",
        "sort" => 2,
        "path" => "/",
    ],
    [
        "title" => "first",
        "sort" => 1,
        "path" => "/home"
    ],
    [
        "title" => "third",
        "sort" => 3,
        "path" => "/about",
    ],
];

function arraySort($array, $key = "sort", $sort = SORT_ASC) {
    usort($array, function($a, $b) use ($key, $sort) {
        return $sort == SORT_ASC ? $a[$key] <=> $b[$key] : -1 * ($a[$key] <=> $b[$key]);
    });
    return($array);
};

var_dump($menu);
$menu = arraySort($menu);
var_dump($menu);
$menu = arraySort($menu, "sort", SORT_DESC);
var_dump($menu);
?>
</pre>
