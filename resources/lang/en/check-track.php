<?php 
return [
  'labels' => [
    'title' => 'inventory',
    'description' => 'specific details of the task',
    'tracks' => 'inventory record',
    'Update Track' => 'Process inventory',
    'Delete' => 'delete inventory',
    'Delete Confirm' => 'confirm deletion?',
    'Delete Confirm Description' => 'This device will not be inventoried while deleting',
    'Record None' => 'No such inventory task',
    'Item None' => 'no such material',
    'Update Delete Action' => 'delete inventory',
  ],
  'fields' => [
    'check_item' => 'Asset Class',
    'item' => [
      'asset_number' => 'Asset Number',
    ],
    'check_id' => 'task id',
    'item_id' => 'Asset Number',
    'status' => 'state',
    'checker' => [
      'name' => 'Inventory staff',
    ],
    'description' => 'describe',
  ],
  'options' => [
  ],
];