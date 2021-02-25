<pre>
<?php

$numbersArray = [1, 2, 3];
echo $numbersArray[1] . "\n";

$myArray = [
    "first" => 1,
    "second" => 2,
    "third" => 3,
];
echo $myArray["second"] . "\n";

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo $matrix[0][1] + $matrix[2][2] + $matrix[2][0] . "\n";

$result1 = [
    "AUTHOR" => [
        "name" => "Пушкин А.С.",
        "email" => "pushkin@example.com",
    ],
    "BOOK" => [
        "title" => "Сказка о золотой рыбке",
        "email" => "pushkin@example.com",
    ],
];

var_dump($result1);

$result2 = [
    "AUTHORS" => [
        [
            "name" => "Достоевский Ф.М.",
            "email" => "dost@emaple.com",
        ],
        [
            "name" => "Бунин И.А.",
            "email" => "bunin@example.com",
        ],
        [
            "name" => "Гоголь Н.В.",
            "email" => "gogol@example.com",
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

var_dump($result2);

$result3 = [
    "AUTHORS" => [
        "dost@emaple.com" => [
            "name" => "Достоевский Ф.М.",
            "email" => "dost@emaple.com",
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

echo $result3["AUTHORS"][$result3["BOOKS"][1]["email"]]["name"];

?>
</pre>
