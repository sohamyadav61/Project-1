<?php

main::start("data.csv");
class main  {
    static public function start($filename) {
        $records = csv::getCSVFILE($filename);
        $table = html::createTable($records);
    }
}
class html {
    public static function generateTable($records) {
        $count = 0;
        foreach ($records as $record) {
            if($count == 0) {
                $array = $record->returnArray();
                $fields = array_keys($array);
                $values = array_values($array);
                print_r($fields);
                print_r($values);
            } else {
                $array = $record->returnArray();
                $values = array_values($array);
                print_r($values);
            }
            $count++;
        }
    }
}
