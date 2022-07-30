<?php 
return [
  'labels' => [
    'title' => 'organize',
    'description' => 'Differentiate between different groups of users',
    'User' => 'user',
    'Department' => 'department',
    'Role' => 'Role',
    'Permission' => 'permission',
    'departments' => 'department',
    'Import' => 'import',
    'File Help' => 'Import supports xlsx and csv files, and the required field [Name] in the table header, and the optional field [Description, Parent Department].',
    'Rewrite' => 'copy',
    'Merge' => 'merge',
    'File' => 'document',
    'LDAP' => 'LDAP',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'parent' => [
      'name' => 'parent department',
    ],
    'mode' => 'model',
    'file' => 'document',
    'parent_id' => 'parent department',
    'role_id' => 'Department heads',
  ],
  'options' => [
  ],
];