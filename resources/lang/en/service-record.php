<?php 
return [
  'labels' => [
    'title' => 'Serve',
    'description' => 'master data list',
    'records' => 'Serve',
    'Status Help' => 'Check this option to suspend the service.',
    'Issue Create' => 'report exception',
    'Delete' => 'delete service',
    'Record None' => 'There is no record for this service!',
    'Delete Confirm' => 'confirm deletion?',
    'Delete Confirm Description' => 'Deletion will also remove all attributions associated with it',
    'Batch Delete' => 'Bulk delete services',
    'Batch Delete Confirm' => 'Are you sure you want to delete the selected service?',
    'Batch Force Delete' => 'Forced deletion of services in batches (unrecoverable)',
    'Batch Force Delete Confirm' => 'Are you sure you want to force delete the selected service? (This operation is irreversible)',
    'Track Create Update' => 'belonging to the device',
    'Deleted' => 'deleted',
    'Track Delete' => 'disassociation',
    'Track Delete Confirm' => 'Confirm to disassociate this user?',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'status' => 'state',
    'device' => [
      'asset_number' => 'owning equipment',
    ],
    'price' => 'price',
    'purchased' => 'Purchase date',
    'expired' => 'expiry date',
    'device_id' => 'equipment',
    'issue' => 'abnormal',
    'start' => 'Starting time',
  ],
  'options' => [
  ],
];