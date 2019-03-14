<?php

main::start("data.csv");
class main  {
    static public function start($filename) {
        $records = csv::getRecords($filename);
        $table = html::generateTable($records);
    }
}
}
