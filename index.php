<?php

$jsonData = '[["Nome;Idade"],["Fabio;23"],["Igo;25"],["Jorg;22"],["Gleisso;23"],["Daniel;50"]]';

$csv = 'arquivo.csv';

$convertedJson = json_decode($jsonData, true);

$csvSelection = fopen($csv, 'w');

foreach($convertedJson as $i) {
    fputcsv($csvSelection, $i);
}

fclose($csvSelection);


?>