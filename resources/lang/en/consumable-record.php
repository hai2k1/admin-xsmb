<?php 
return [
  'labels' => [
    'title' => 'Consumables',
    'description' => 'master data list',
    'records' => 'Consumables',
    'In' => 'warehousing',
    'Out' => 'use',
    'Deleted' => 'deleted',
    'Batch Delete' => 'Delete consumables in bulk',
    'Batch Delete Confirm' => 'Are you sure you want to delete the selected supplies?',
    'Batch Force Delete' => 'Forcibly delete consumables in batches (unrecoverable)',
    'Batch Force Delete Confirm' => 'Are you sure you want to force delete the selected supplies? (This operation is irreversible)',
    'Delete' => 'Remove consumables',
    'Import' => 'Import consumables',
    'Delete Confirm' => 'confirm deletion?',
    'Delete Confirm Description' => 'Deleting will also delete all associated history',
    'File Help' => 'The import supports xlsx and csv files, and the required fields [name, specification, classification, manufacturer] in the header of the table are supported, and the Excel file exported by the asset management system can be directly imported.',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'specification' => 'Specification',
    'category' => [
      'name' => 'Classification',
    ],
    'vendor' => [
      'name' => 'Manufacturer',
    ],
    'price' => 'price',
    'user_id' => 'User (applicant)',
    'purchased' => 'Purchase date',
    'expired' => 'expiry date',
    'category_id' => 'Classification',
    'vendor_id' => 'Manufacturer',
    'file' => 'document',
    'consumable_id' => 'Consumables',
    'track' => [
      'number' => 'total',
    ],
    'number' => 'quantity',
  ],
];