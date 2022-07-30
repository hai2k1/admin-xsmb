<?php 
return [
  'labels' => [
    'title' => 'Asset failure',
    'description' => 'Reporting of malfunctioning equipment, accessories, etc.',
    'records' => 'material failure',
    'Status Waiting' => 'waiting to be processed',
    'Status Done' => 'Finish',
    'Status Cancelled' => 'Cancel',
    'Update' => 'Handling failures',
  ],
  'fields' => [
    'asset_number' => 'Asset Number',
    'ng_description' => 'Fault description',
    'ok_description' => 'Repair Instructions',
    'ng_time' => 'downtime',
    'ok_time' => 'maintenance time',
    'status' => 'state',
  ],
  'options' => [
  ],
];