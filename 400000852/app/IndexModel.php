<?php

class IndexModel extends Observable_Model
{
    private $recordData = [];

    public function getAll() : array{
        $courseData = file_get_contents('data/courses.json');
        $this->recordData = json_decode($courseData, TRUE);
        $courseInsData = file_get_contents('data/course_instructor.json');
        array_push($recordDatas, json_decode($courseInsData, TRUE)); 
        $falcDeptData = file_get_contents('data/faculty_department.json');
        array_push($recordData, json_decode($falcDeptData, TRUE)); 
        $falcDeptCourseData = file_get_contents('data/faculty_dept_courses.json');
        array_push($recordData, json_decode($falcDeptCourseData, TRUE)); 
        $instructorData = file_get_contents('data/instructors.json');
        array_push($recordData, json_decode($instructorData, TRUE)); 
        return $this->recordData;
    }

    public function getRecord(string $id) : array{
        return [];
    }
}