<ul class="<?= $cssClass ?>">
    <?php foreach ($sortedArray as $item) { ?>
        <li><a style="<?= $_SERVER["REQUEST_URI"] == $item["path"] ? "text-decoration: underline" : "" ?>" href="<?= $item["path"]?>"><?= $item["title"] ?></a></li>
    <? } ?>
</ul>