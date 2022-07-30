<?php 
return [
  'labels' => [
    'title' => 'equipment',
    'description' => 'Support multi-level tree structure',
    'categories' => 'Equipment classification',
    'Import' => 'import',
    'File Help' => 'Import supports xlsx and csv files, and the table header must use [name, description].',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'parent_id' => 'parent category',
    'depreciation_rule_id' => 'depreciation rules',
    'file' => 'document',
  ],
  'options' => [
  ],
];