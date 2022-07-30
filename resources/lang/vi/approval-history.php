<?php 
return [
  'labels' => [
    'title' => 'Quy trình phê duyệt',
    'description' => 'Định nghĩa công cụ xử lý',
    'records' => 'Quy trình phê duyệt',
    'Update' => 'kiểm toán',
  ],
  'fields' => [
    'name' => 'Tên',
    'description' => 'mô tả',
    'role' => [
      'name' => 'Vai trò kiểm toán',
    ],
    'approval' => [
      'name' => 'phê duyệt',
    ],
    'item' => 'dự án',
    'item_id' => 'ID dự án',
    'approval_id' => 'phê duyệt',
    'role_id' => 'Vai trò kiểm toán',
    'order_id' => 'Tên quy trình',
  ],
];