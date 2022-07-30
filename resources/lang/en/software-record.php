<?php 
return [
  'labels' => [
    'title' => 'software',
    'description' => 'master data list',
    'records' => 'software',
    'Manage Track' => 'management attribution',
    'Export To Excel' => 'Export to Excel',
    'Counts Help' => '"-1" means no limit.',
    'Batch Delete' => 'Bulk removal of software',
    'Batch Delete Confirm' => 'Are you sure you want to remove the selected software?',
    'Batch Force Delete' => 'Forcibly delete software in batches (unrecoverable)',
    'Batch Force Delete Confirm' => 'Are you sure you want to force delete the selected software? (This operation is irreversible)',
    'Delete' => 'remove software',
    'Delete Confirm' => 'confirm deletion?',
    'Delete Confirm Description' => 'Deletion will also remove all attributions associated with it',
    'Track Create Update' => 'belonging to the device',
    'Import' => 'import software',
    'File Help' => 'The import supports xlsx and csv files, and the required fields in the table header [asset number, name, classification, manufacturer, version], and supports the direct import of Excel files exported by the asset management system.',
    'Deleted' => 'deleted',
  ],
  'fields' => [
    'asset_number_qrcode' => 'QR code',
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
      'asset_number' => 'owning equipment',
      'user' => [
        'name' => 'user',
      ],
    ],
    'asset_number' => 'Asset Number',
    'expiration_left_days' => 'Remaining Warranty Time',
    'category_id' => 'Classification',
    'vendor_id' => 'Manufacturer',
    'depreciation_id' => 'depreciation rules',
    'file' => 'document',
  ],
  'options' => [
  ],
];