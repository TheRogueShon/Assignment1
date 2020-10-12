<?php

class SignupModel extends Observable_Model
{
    private $courses = [];

    public function getAll() : array{
        $courseData = file_get_contents('data/courses.json');
        $this->courses = json_decode($courseData, TRUE); 
        return $this->courses;
    }

    public function getRecord(string $id) : array{
        return [];
    }
}