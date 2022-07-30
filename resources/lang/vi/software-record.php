<?php 
return [
  'labels' => [
    'title' => 'phần mềm',
    'description' => 'danh sách dữ liệu tổng thể',
    'records' => 'phần mềm',
    'Manage Track' => 'phân bổ quản lý',
    'Export To Excel' => 'Xuất sang Excel',
    'Counts Help' => '"-1" có nghĩa là không có giới hạn.',
    'Batch Delete' => 'Loại bỏ hàng loạt phần mềm',
    'Batch Delete Confirm' => 'Bạn có chắc chắn muốn xóa phần mềm đã chọn không?',
    'Batch Force Delete' => 'Buộc xóa phần mềm theo lô (không thể khôi phục)',
    'Batch Force Delete Confirm' => 'Bạn có chắc chắn muốn buộc xóa phần mềm đã chọn không? (Thao tác này không thể đảo ngược)',
    'Delete' => 'gỡ bỏ phần mềm',
    'Delete Confirm' => 'xác nhận xóa?',
    'Delete Confirm Description' => 'Việc xóa cũng sẽ xóa tất cả các ghi nhận tác giả được liên kết với nó',
    'Track Create Update' => 'thuộc về thiết bị',
    'Import' => 'nhập phần mềm',
    'File Help' => 'Nhập hỗ trợ tệp xlsx và csv và các trường bắt buộc trong tiêu đề bảng [số tài sản, tên, phân loại, nhà sản xuất, phiên bản], hỗ trợ nhập trực tiếp tệp Excel được xuất bởi hệ thống quản lý tài sản.',
    'Deleted' => 'đã xóa',
  ],
  'fields' => [
    'asset_number_qrcode' => 'mã QR',
    'name' => 'Tên',
    'description' => 'mô tả',
    'category' => [
      'name' => 'Phân loại',
    ],
    'version' => 'Phiên bản',
    'vendor' => [
      'name' => 'nhà chế tạo',
    ],
    'price' => 'giá bán',
    'purchased' => 'Thời gian mua hàng',
    'expired' => 'Thời gian hết hạn',
    'distribution' => 'Phương thức phát hành',
    'counts' => 'số lượng ủy quyền',
    'left_counts' => 'Số lượng giấy phép còn lại',
    'device' => [
      'asset_number' => 'sở hữu thiết bị',
      'user' => [
        'name' => 'người sử dụng',
      ],
    ],
    'asset_number' => 'Số tài sản',
    'expiration_left_days' => 'Thời gian bảo hành còn lại',
    'category_id' => 'Phân loại',
    'vendor_id' => 'nhà chế tạo',
    'depreciation_id' => 'quy tắc khấu hao',
    'file' => 'tài liệu',
  ],
  'options' => [
  ],
];