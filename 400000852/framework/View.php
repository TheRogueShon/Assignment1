<?php
include 'autoload.php';
class View implements ObserverInterface
{
    private $data = [];
    private $tpl = '';

    public function setTemplate(string $filename){
        $this->tpl = $filename;
        return $this->tpl;
    }

    public function display(){
        extract($this->data);
        echo $this->tpl;
        require $this->tpl;
        return $this->tpl;
    }

    public function addVar($name, $value){
        $this->data[$name] = $value;
        return $this->data;
    }

    public function update(Observable_Model $obs){
        $records = $obs->giveUpdate();
        foreach($records as $r){
            $this->addVar($r['name'], $r['value']);
        }
    }
}