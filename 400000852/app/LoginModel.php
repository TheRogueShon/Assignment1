<?php

class LoginModel extends Observable_Model
{

    public function getAll() : array{
        $users = $this->loadData(DATA_DIR . '/users.json');
        return $users;
    }

    public function getRecord(string $id) : array{
        return [];
    }
}