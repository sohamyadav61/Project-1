<?php

main::start("data.csv");

class main  {
    static public function start($filename) {
        $records = csv::getCSVFILE($filename);
        $table = html::createTable($records);

    }
}

