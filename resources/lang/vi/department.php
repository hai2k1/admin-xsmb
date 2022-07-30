<?php 
return [
  'labels' => [
    'title' => 'tổ chức',
    'description' => 'Phân biệt giữa các nhóm người dùng khác nhau',
    'User' => 'người sử dụng',
    'Department' => 'Phòng ban',
    'Role' => 'Vai diễn',
    'Permission' => 'sự cho phép',
    'departments' => 'Phòng ban',
    'Import' => 'nhập khẩu',
    'File Help' => 'Nhập hỗ trợ các tệp xlsx và csv và trường bắt buộc [Tên] trong tiêu đề bảng và trường tùy chọn [Mô tả, Phòng phụ huynh].',
    'Rewrite' => 'sao chép',
    'Merge' => 'hợp nhất',
    'File' => 'tài liệu',
    'LDAP' => 'LDAP',
  ],
  'fields' => [
    'name' => 'Tên',
    'description' => 'mô tả',
    'parent' => [
      'name' => 'bộ phận phụ huynh',
    ],
    'mode' => 'người mẫu',
    'file' => 'tài liệu',
    'parent_id' => 'bộ phận phụ huynh',
    'role_id' => 'Trưởng bộ môn',
  ],
  'options' => [
  ],
];