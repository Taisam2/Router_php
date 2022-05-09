<?php 

$query = require 'bootstrap.php';

require 'Task.php';
require 'functions.php';


$tasks = $query->selectAll('todos');



require 'index.view.php';