<?php namespace RoocketValidation;

class RoocketValidation
{
    public function require(array $data , string $field) : bool
    {
        return isset($data[$field]); 
    }
}