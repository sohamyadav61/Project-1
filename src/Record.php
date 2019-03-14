<?php
class record
{
    public function __construct(Array $fieldNames = null, $values = null)
    {
        $record = array_combine($fieldNames, $values);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }
}

class recordFactory {
    public static function create(Array $fieldNames = null, Array $values = null) {
        $record = new record($fieldNames, $values);
        return $record;
    }
}

public function createProperty($name = 'brand', $value = 'nike') {
    $this->{$name} = $value;
}