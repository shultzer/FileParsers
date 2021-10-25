<?php

namespace Classes;

use Interfaces\FromFile;

abstract class AbstractParser
{
    protected $file;

    public function __construct($content) {
        $this->content = $content;
    }

    public function render() {
        $parser = $this->getParser();
        return $parser->makeHtmlTable($this->content);

    }

    abstract public function getParser():FromFile;
}