<?php

namespace Classes;
use Interfaces\FromFile;

class CSVParser extends AbstractParser
{

    public function getParser(): FromFile {
        return new FromCsv($this->file);
    }

}