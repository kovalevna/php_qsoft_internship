<pre>
<?php

$result3 = [
    "AUTHORS" => [
        "dost@example.com" => [
            "name" => "Достоевский Ф.М.",
            "email" => "dost@example.com",
            "birthYear" => 1821,
        ],
        "bunin@example.com" => [
            "name" => "Бунин И.А.",
            "email" => "bunin@example.com",
            "birthYear" => 1870,
        ],
        "gogol@example.com" => [
            "name" => "Гоголь Н.В.",
            "email" => "gogol@example.com",
            "birthYear" => 1809,
        ],
    ],
    "BOOKS" => [
        [
            "title" => "Преступление и наказание",
            "email" => "dost@example.com",
        ],
        [
            "title" => "Господин из Сан-Франциско",
            "email" => "bunin@example.com",
        ],
        [
            "title" => "Мертвые души",
            "email" => "gogol@example.com"
        ],
    ],
];

foreach($result3["BOOKS"] as $item) {
    echo "Книга " . $item["title"] . ", ее написал " . $result3["AUTHORS"][$item["email"]]["name"] . " " . $result3["AUTHORS"][$item["email"]]["birthYear"] . " " . $result3["AUTHORS"][$item["email"]]["email"] . "\n";
}

shuffle($result3);

echo "\n";

if (isset($result3[0][0]["title"])) {
    foreach($result3[0] as $item) {
        echo "Книга " . $item["title"] . ", ее написал " . $result3[1][$item["email"]]["name"] . " " . $result3[1][$item["email"]]["birthYear"] . " " . $result3[1][$item["email"]]["email"] . "\n";
    }
} else {
    foreach($result3[1] as $item) {
        echo "Книга " . $item["title"] . ", ее написал " . $result3[0][$item["email"]]["name"] . " " . $result3[0][$item["email"]]["birthYear"] . " " . $result3[0][$item["email"]]["email"] . "\n";
    }
}

?>
</pre>
