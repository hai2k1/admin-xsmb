<?php 
return [
  'labels' => [
    'title' => 'equipment',
    'description' => 'Use relationship with users',
    'tracks' => 'Equipment ownership record',
    'History Scope' => 'View historical attribution',
    'Delete' => 'disassociation',
    'Track None' => 'No records found for this device!',
    'Delete Success' => 'The ownership of the device has been released successfully!',
    'Delete Confirm' => 'Confirm to disassociate this user?',
    'Update Delete' => 'return equipment',
  ],
  'fields' => [
    'device' => [
      'asset_number' => 'Asset Number',
      'name' => 'equipment',
    ],
    'user' => [
      'name' => 'user',
    ],
    'lend_time' => 'borrow time',
    'lend_description' => 'borrow description',
    'plan_return_time' => 'Planned return time',
    'return_time' => 'return time',
    'return_description' => 'Return description',
  ],
  'options' => [
  ],
];