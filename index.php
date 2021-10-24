<?php

use Reporting\Format\JsonFormatter;
use Reporting\Format\HtmlFormatter;
use Reporting\Format\CsvFormatter;
use Reporting\ReportPrinter;
use Reporting\Report;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", "/", $className);
    require_once($className . ".php");
});

//ici on defini notre choix
$json = new JsonFormatter();
$html = new HtmlFormatter();
$csv = new CsvFormatter();
$rapport = new Report("2019-01-01", "Rapport annuel de développement");

// Puis on passe notre choix dans le reportPrinter
$reportPrinter = new ReportPrinter($html,$rapport);

$reportPrinter->print();
$reportPrinter->dump();