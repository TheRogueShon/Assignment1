<?php

class CoursesModel extends Observable_Model
{
    private $courses = [];

    public function getAll() : array{
        $courses = $this->loadData(DATA_DIR . '/courses.json');
        $instructors = $this->loadData(DATA_DIR . '/instructors.json');
        return ['courses'=>$courses['courses'], 'instructors'=>$instructors['instructors']];
    }

    public function getRecord(string $id) : array{
        return [];
    }
}