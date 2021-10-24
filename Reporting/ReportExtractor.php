<?php

namespace Reporting;

use Reporting\Format\FormatterInterface;

class ReportExtractor
{
    /**
     * Le tableau qui contiendra les différents formatters
     *
     * @var array
     */
    protected $formatters = [];

    /**
     * Permet d'ajouter n'importe quel formatter au tableau du moment qu'il implémente l'interface
     * FormatterInterface ! Beaucoup plus souple !
     *
     * @param FormatterInterface $formatter
     *
     * @return void
     */
    public function addFormatter(FormatterInterface $formatter): void
    {
        $this->formatters[] = $formatter;
    }

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return void
     */
    public function process(Report $report)
    {
        // On boucle sur les formatters
        foreach ($this->formatters as $formatter) {
            // On ne se pose pas la question du type de formatter ... Il a forcément la méthode 
            // format($report) puisqu'il implémente la FormatterInterface ;-)
            echo $formatter->format($report);
            echo "<hr/>";
        }
    }
}
