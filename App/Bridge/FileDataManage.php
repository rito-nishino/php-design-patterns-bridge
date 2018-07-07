<?php

namespace App\Bridge;

use App\Bridge\Interfaces\FileDataManageInterface;

class FileDataManage implements FileDataManageInterface
{
    private $json_path;
    private $data;
    private $data_total = 0;
    private $pointer = 0;

    public function __construct($json)
    {
        $this->json_path = $json;
    }

    public function read()
    {
        $this->data = json_decode(file_get_contents($this->json_path));
        $this->data_total = count($this->data);
    }

    public function display()
    {
        echo sprintf(
            "id:%s / name:%s / category:%s<br>",
            $this->data[$this->pointer]->id,
            $this->data[$this->pointer]->name,
            $this->data[$this->pointer]->category
        );
        $this->pointer++;
    }

    public function getTotalCount()
    {
        return $this->data_total;
    }

    public function getPointer()
    {
        return $this->pointer;
    }

}