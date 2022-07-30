<?php 
return [
  'labels' => [
    'title' => 'Vật tư tiêu hao',
    'description' => 'danh sách dữ liệu tổng thể',
    'records' => 'Vật tư tiêu hao',
    'In' => 'kho bãi',
    'Out' => 'sử dụng',
    'Deleted' => 'đã xóa',
    'Batch Delete' => 'Xóa hàng loạt vật tư tiêu hao',
    'Batch Delete Confirm' => 'Bạn có chắc chắn muốn xóa các nguồn cung cấp đã chọn không?',
    'Batch Force Delete' => 'Buộc xóa vật tư tiêu hao theo lô (không thể khôi phục)',
    'Batch Force Delete Confirm' => 'Bạn có chắc chắn muốn buộc xóa các nguồn cung cấp đã chọn không? (Thao tác này không thể đảo ngược)',
    'Delete' => 'Loại bỏ vật tư tiêu hao',
    'Import' => 'Nhập hàng tiêu dùng',
    'Delete Confirm' => 'xác nhận xóa?',
    'Delete Confirm Description' => 'Xóa cũng sẽ xóa tất cả lịch sử liên quan',
    'File Help' => 'Quá trình nhập hỗ trợ tệp xlsx và csv, đồng thời hỗ trợ các trường bắt buộc [tên, đặc điểm kỹ thuật, phân loại, nhà sản xuất] trong tiêu đề của bảng và có thể nhập trực tiếp tệp Excel do hệ thống quản lý nội dung xuất.',
  ],
  'fields' => [
    'name' => 'Tên',
    'description' => 'mô tả',
    'specification' => 'Sự chỉ rõ',
    'category' => [
      'name' => 'Phân loại',
    ],
    'vendor' => [
      'name' => 'nhà chế tạo',
    ],
    'price' => 'giá bán',
    'user_id' => 'Người dùng (người đăng ký)',
    'purchased' => 'Ngày mua',
    'expired' => 'ngày hết hạn',
    'category_id' => 'Phân loại',
    'vendor_id' => 'nhà chế tạo',
    'file' => 'tài liệu',
    'consumable_id' => 'Vật tư tiêu hao',
    'track' => [
      'number' => 'toàn bộ',
    ],
    'number' => 'số lượng',
  ],
];