<?php

namespace App\Bridge\Interfaces;

interface FileDataManageInterface
{
    public function read();
    public function display();
    public function getTotalCount();
    public function getPointer();
}