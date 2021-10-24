<?php

namespace Reporting;

use Reporting\FormatInterface\FormatterInterface;

class ReportPrinter
{
    protected $formatter;
    protected $report;

    /**
     * prend 2 arguments
     * FormatterInterface $formatter
     * Report $report
     */
    public function __construct(FormatterInterface $formatter,Report $report)
    {
        $this->formatter=$formatter;
        $this->report=$report;
    }

    public function print(): void
    {
        echo $this->formatter->format($this->report);
    }

    public function dump(): void
    {
        var_dump(
            $this->formatter->format($this->report)
        );
    }
}
