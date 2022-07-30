<?php 
return [
  'labels' => [
    'title' => 'software',
    'description' => 'Sorting and custom actions',
    'columns' => 'field',
    'Name Help' => 'Field name, please use English as much as possible to ensure compatibility.',
    'Nick Name Help' => 'Describe the name of this field, the name is arbitrary.',
    'Must Help' => 'Note: Date and DateTime type, will never be required.',
    'Delete' => 'delete field',
    'Update' => 'edit field',
    'Delete Confirm' => 'confirm deletion?',
    'Delete Confirm Description' => 'Deleting will delete all user data in this field and cannot be recovered',
    'Custom Column Sort Delete' => 'restore default sort',
    'Custom Column Delete Confirm' => 'Are you sure you want to restore the default sorting?',
  ],
  'fields' => [
    'qrcode' => 'QR code',
    'name' => 'name',
    'description' => 'describe',
    'category' => [
      'name' => 'Classification',
    ],
    'version' => 'Version',
    'vendor' => [
      'name' => 'Manufacturer',
    ],
    'price' => 'price',
    'purchased' => 'Purchase time',
    'expired' => 'Expiration time',
    'distribution' => 'Issuing method',
    'counts' => 'number of authorizations',
    'left_counts' => 'Number of remaining licenses',
    'device' => [
      'name' => 'equipment',
      'user' => [
        'name' => 'user',
      ],
    ],
    'asset_number' => 'Asset Number',
    'expiration_left_days' => 'Remaining Warranty Time',
    'nick_name' => 'field alias',
    'must' => 'Required',
    'table_name' => 'Table Name',
    'custom_column_id' => 'custom field',
    'select_options' => 'list of options',
    'item' => 'item',
    'new_name' => 'new name',
    'new_nick_name' => 'new alias',
  ],
  'options' => [
  ],
];