<?php

if (!isset($_GET['page'])) {
    header('Location: accueil');
}
// On parse le fichier
$xml = simplexml_load_file('source.xml');

$menu = $xml->page[0]->menu;
$menu2 = $xml->page[1]->menu;
$menu3 = $xml->page[2]->menu;
$menu4 = $xml->page[3]->menu;

// condition pour afficher le contenu title et content de notre fichier source.xml
if (isset($_GET['page']) && ($_GET['page']) == 1) {
    $title = $xml->page[0]->title;
    $content = $xml->page[0]->content;
} elseif (isset($_GET['page']) && ($_GET['page']) == 2) {
    $title = $xml->page[1]->title;
    $content = $xml->page[1]->content;
} elseif (isset($_GET['page']) && ($_GET['page']) == 3) {
    $title = $xml->page[2]->title;
    $content = $xml->page[2]->content;
} elseif (isset($_GET['page']) && ($_GET['page']) == 4) {
    $title = $xml->page[3]->title;
    $content = $xml->page[3]->content;
} else {
    $title = $xml->page[0]->title;
    $content = $xml->page[0]->content;
}
