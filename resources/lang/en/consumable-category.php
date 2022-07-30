<?php 
return [
  'labels' => [
    'title' => 'Consumables',
    'description' => 'Support multi-level tree structure',
    'categories' => 'Consumables classification',
    'Import' => 'import',
    'File Help' => 'Import supports xlsx and csv files, and the table header must use [name, description].',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'parent_id' => 'parent node',
    'order' => 'sort',
    'file' => 'document',
  ],
  'options' => [
  ],
];