<?php

class IndexModel extends Observable_Model
{
    //private $recordData = [];

    public function getAll() : array{
        $data = $this->loadData(DATA_DIR . '/courses.json');
        //return $data;
        $popularColumn = array_column($data['courses'], 3);
        $recommendedColumn = array_column($data['courses'], 2);
        $extra = $data['courses'];

        array_multisort($recommendedColumn, SORT_DESC, $data['courses']);
        $recommended = array_slice($data['courses'], 0, 8);
        array_multisort($popularColumn, SORT_DESC, $extra);
        $popular = array_slice($extra, 0, 8);

        $instructors = $this->loadData(DATA_DIR . '/instructors.json');

        return ['popular'=>$popular, 'recommended'=>$recommended, 'instructors'=>$instructors['instructors']];
    }

    public function getRecord(string $id) : array{
        return [];
    }
}