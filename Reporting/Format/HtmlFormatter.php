<?php

namespace Reporting\Format;

use Reporting\FormatInterface\FormatterInterface;
use Reporting\Report;

class HtmlFormatter implements FormatterInterface
{

    public function format(\Reporting\Report $report): string
    {
        // méthode publique getContents() qui nous donne les infos qu'on veut 
        // sous la forme d'un tableau associatif (avec les clés title et date)
        $content = $report->getContents();

        // On peut maintenant formater !
        $title = $content['title'];
        $date = $content['date'];

        return "<h2>$title</h2><em>$date</em>";
    }
}
