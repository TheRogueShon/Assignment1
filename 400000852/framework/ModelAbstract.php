<?php
abstract class ModelAbstract
{

    abstract public function getAll() : array;

    abstract public function getRecord(string $id) : array;

    public function loadData(){
        
    }
}