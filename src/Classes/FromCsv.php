<?php

namespace Classes;

use Interfaces\FromFile;

class FromCsv implements FromFile
{

    public function makeHtmlTable($content) {
        $table = "<table>";
        $rows  = str_getcsv($content, "\n");
        foreach ( $rows as $key => &$row ) {

            if( $row != ',,,,,' ) {
                $table .= "<tr>";
                $cells = array_filter(str_getcsv($row));
                foreach ( $cells as &$cell ) {
                    if( $key == 0 ) {
                        $table .= "<th>$cell</th>";
                    }
                    else {
                        $table .= "<td>$cell</td>";
                    }
                }
                $table .= "</tr>";
            }
        }
        $table .= "</table>";

        return $table;
    }
}