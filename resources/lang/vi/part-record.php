<?php 
return [
  'labels' => [
    'title' => 'Phụ kiện',
    'description' => 'danh sách dữ liệu tổng thể',
    'records' => 'Phụ kiện',
    'Category' => 'Phân loại',
    'Vendor' => 'nhà chế tạo',
    'Depreciation Rule' => 'quy tắc khấu hao',
    'Batch Delete' => 'Xóa hàng loạt phụ kiện',
    'Batch Delete Confirm' => 'Bạn có chắc chắn muốn xóa phụ kiện đã chọn không?',
    'Batch Force Delete' => 'Buộc xóa các phụ kiện theo lô (không thể khôi phục)',
    'Batch Force Delete Confirm' => 'Bạn có chắc chắn muốn buộc xóa các phụ kiện đã chọn không? (Thao tác này không thể đảo ngược)',
    'Delete' => 'Loại bỏ các phụ kiện',
    'Delete Confirm' => 'xác nhận xóa?',
    'Delete Confirm Description' => 'Việc xóa cũng sẽ xóa tất cả các ghi nhận tác giả được liên kết với nó',
    'Track Create Update' => 'thiết bị gia đình',
    'Import' => 'Nhập khẩu phụ kiện',
    'Maintenance Create' => 'báo cáo thất bại',
    'File Help' => 'Quá trình nhập hỗ trợ tệp xlsx và csv cũng như các trường bắt buộc trong tiêu đề bảng [số tài sản, phân loại, đặc điểm kỹ thuật, nhà sản xuất] và hỗ trợ nhập trực tiếp tệp Excel được xuất bởi hệ thống quản lý tài sản.',
    'Deleted' => 'đã xóa',
    'Track Delete' => 'giải ngũ',
    'Track Delete Confirm' => 'Xác nhận hủy liên kết người dùng này?',
  ],
  'fields' => [
    'asset_number_qrcode' => 'mã QR',
    'name' => 'Tên',
    'description' => 'mô tả',
    'category' => [
      'name' => 'Phân loại',
    ],
    'vendor' => [
      'name' => 'nhà chế tạo',
    ],
    'device' => [
      'asset_number' => 'sở hữu thiết bị',
    ],
    'specification' => 'Sự chỉ rõ',
    'price' => 'giá bán',
    'sn' => 'Số sê-ri phụ kiện',
    'purchased' => 'Ngày mua',
    'expired' => 'ngày hết hạn',
    'depreciation' => [
      'name' => 'quy tắc khấu hao',
      'termination' => 'Ngày phế liệu',
    ],
    'asset_number' => 'Số tài sản',
    'expiration_left_days' => 'Thời gian bảo hành còn lại',
    'depreciation_price' => 'giá sau khi khấu hao',
    'category_id' => 'Phân loại',
    'vendor_id' => 'nhà chế tạo',
    'depreciation_id' => 'quy tắc khấu hao',
    'device_id' => 'Trang thiết bị',
    'ng_description' => 'Mô tả lỗi',
    'ng_time' => 'thời gian thất bại',
    'file' => 'tài liệu',
  ],
];