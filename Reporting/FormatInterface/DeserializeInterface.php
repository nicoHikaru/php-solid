<?php

namespace Reporting\FormatInterface;

use Reporting\FormatInterface\FormatterInterface;
use Reporting\Report;

interface DeserializeInterface extends FormatterInterface
{
    public function deserialize(string $input): Report;
}
