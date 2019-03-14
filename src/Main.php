<?php

main::start("data/data.csv");
class main  {
    static public function start($filename) {
        $records = csv::getRecords($filename);
        $table = html::createTable($records);
    }
}
}
