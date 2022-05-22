<?php namespace RoocketValidation;

class Validation
{
    public function has(array $data , string $field)
    {
        return isset($data[$field]); 
    }

    public function get()
    {
        return 'get data';
    }

    public function set()
    {

    }
}