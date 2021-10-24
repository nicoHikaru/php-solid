<?php

namespace Reporting\FormatInterface;

use Reporting\Report;

interface FormatterInterface
{
    public function format(Report $report): string;
}
