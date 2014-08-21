<?php

$block->open();

$strToArr = function($arrOrStr) {
    if(is_array($arrOrStr)) {
        return $arrOrStr;
    } else {
        return (array) $arrOrStr;
    }
};


block('article-single', $block->document);
if (!empty($block->document['url'])) {
    $i = 0;
    $block->document->each('url', function ($prop, $item) use ($block, &$i, $strToArr) {
        $urlTitle = !empty($strToArr($block->options['linkText'])[$i])
            ? $strToArr($block->options['linkText'])[$i]
            : $item;
?>
    <a href="<?= $item; ?>" itemprop="<?= $prop ?>"><?= $urlTitle; ?></a>
<?php
    $i++;
    });
}

$block->close();
