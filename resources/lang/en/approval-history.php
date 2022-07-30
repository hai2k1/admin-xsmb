<?php 
return [
  'labels' => [
    'title' => 'Approval Process',
    'description' => 'Process Engine Definition',
    'records' => 'Approval Process',
    'Update' => 'audit',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'role' => [
      'name' => 'Audit role',
    ],
    'approval' => [
      'name' => 'approval',
    ],
    'item' => 'project',
    'item_id' => 'Project ID',
    'approval_id' => 'approval',
    'role_id' => 'Audit role',
    'order_id' => 'Process name',
  ],
];