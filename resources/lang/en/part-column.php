<?php 
return [
  'labels' => [
    'title' => 'Accessories',
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
    'vendor' => [
      'name' => 'Manufacturer',
    ],
    'device' => [
      'name' => 'owning equipment',
    ],
    'specification' => 'Specification',
    'price' => 'price',
    'purchased' => 'Purchase date',
    'expired' => 'expiry date',
    'depreciation' => [
      'name' => 'depreciation rules',
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
];