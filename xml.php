<?php
    $fichier = 'source.xml';

    // Ma propre fonction de traitement du texte
    // qui est appelée par le "parseur"
    function fonctionTexte($parseur, $texte)
    {
        // Dans l'immédiat nous nous contentons d'afficher
        // le texte brut accompagné d'un simple retour à la ligne
        echo $texte . '<br/>';
    }

    // Création du parseur XML
    $parseurXML = xml_parser_create();

    // Je précise le nom de la fonction a appeler
    // lorsque du texte est rencontré
    xml_set_character_data_handler($parseurXML, 'fonctionTexte');

    // Ouverture du fichier
    $fp = fopen($fichier, 'r');
    if (!$fp) {
        die("Impossible d'ouvrir le fichier XML");
    }

    // Lecture ligne par ligne
    while ($ligneXML = fgets($fp, 1024)) {
        // Analyse de la ligne
        // REM: feof($fp) retourne TRUE s'il s'agit de la dernière
        //      ligne du fichier.
        xml_parse($parseurXML, $ligneXML, feof($fp)) or
            die('Erreur XML');
    }

    xml_parser_free($parseurXML);
    fclose($fp);
