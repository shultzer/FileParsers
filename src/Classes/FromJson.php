<?php

namespace Classes;

use Interfaces\FromFile;

class FromJson implements FromFile
{

    public function makeHtmlTable($content) {
        $table = json_decode($content, true);
        $html  = "<table>";
        $keys  = array_keys($table[0]);
        $html  .= "<tr>";
        foreach ( $keys as $key ) {
            $html .= "<th>$key</th>";
        }
        $html .= "</tr>";
        for ( $i = 0; $i < sizeof($table); $i++ ) {
            $html .= "<tr>";
            $html .= "<td>".$table[$i]["login"]."</td>";
            $html .= "<td>".$table[$i]["title"]."</td>";
            $html .= "<td>".$table[$i]["lastname"]."</td>";
            $html .= "<td>".$table[$i]["firstname"]."</td>";
            $html .= "<td>".$table[$i]["gender"]."</td>";
            $html .= "<td>".$table[$i]["email"]."</td>";
            $html .= "<td>".$table[$i]["picture"]."</td>";
            $html .= "<td>".$table[$i]["address"]."</td>";
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}