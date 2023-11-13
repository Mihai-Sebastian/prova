<?php


use framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = "hello world!";

require "../resources/views/index.blade.php";

