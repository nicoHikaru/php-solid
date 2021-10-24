<?php

namespace Reporting\Format;

use Reporting\FormatInterface\DeserializeInterface;

class JsonFormatter implements DeserializeInterface
{
    public function format(\Reporting\Report $report): string
    {
        // La méthode publique getContents() qui nous donne les infos qu'on veut 
        // sous la forme d'un tableau associatif (avec les clés title et date)
        $content = $report->getContents();

        // On encode en JSON le tableau associatif envoyé
        return json_encode($content);
    }

    public function deserialize(string $input): \Reporting\Report
    {
        $contents = json_decode($input);
        $title = $contents->title;
        $date = $contents->date;
        
        return new \Reporting\Report($date, $title);
    }
}
