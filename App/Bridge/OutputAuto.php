<?php

namespace App\Bridge;

use App\Bridge\Output;

class OutputAuto extends Output
{
    public function __construct(FileDataManage $dataManage) {
        parent::__construct($dataManage);
    }

    public function autoDisplay()
    {
        while ($this->data_manager->getPointer() !== $this->data_manager->getTotalCount()) {
            $this->data_manager->display();
        }
    }
}