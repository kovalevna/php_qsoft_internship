<?php

$title = "Моя страница";
$red = (bool) rand(0, 1);
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

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 <?=$red ? 'class = "red"':""?>><?=$title?></h1>
<!-- Выведите реально количество авторов -->
<div>Всего авторов на портале <?=count($result3["AUTHORS"])?> </div>

<!-- Выведите все книги -->
<?php foreach($result3["BOOKS"] as $item) { ?>
<p>Книга <?=$item["title"] ?>, ее написал <?= $result3["AUTHORS"][$item["email"]]["name"] ?> (<?= $item["email"] ?>)</p>
<?php
}
?>
</body>
</html>