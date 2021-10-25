<?php

namespace Classes;

use Interfaces\FromFile;

class JsonParser extends AbstractParser
{

    public function getParser():FromFile {
        return new FromJson($this->file);
    }

}