<?php
require_once 'autoload.php';

use App\Bridge\FileDataManage;
use App\Bridge\Output;
use App\Bridge\OutputAuto;

$json_path = 'App/Files/frameworks.json';

$manual = new Output(new FileDataManage($json_path));
$auto = new OutputAuto(new FileDataManage($json_path));

$manual->read();
$auto->read();

echo '<h2>１つずつ表示</h2>';
$manual->display();
$manual->display();
$manual->display();

echo '<h2>全て表示</h2>';
$auto->autoDisplay();