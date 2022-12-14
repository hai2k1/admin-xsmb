<?php 
return [
  'labels' => [
    'title' => 'Trang thiết bị',
    'description' => 'danh sách dữ liệu tổng thể',
    'records' => 'Trang thiết bị',
    'Depreciation Price' => 'khấu hao giá',
    'Current User' => 'người dùng hiện tại',
    'Photo Help' => 'Tùy chọn cung cấp ảnh của thiết bị làm tổng quan.',
    'Security Password Help' => 'Mật khẩu bảo mật, có thể đại diện cho mật khẩu BIOS, v.v.',
    'Admin Password Help' => 'Mật khẩu quản trị viên có thể đại diện cho mật khẩu tài khoản quản trị viên máy tính và mật khẩu quản trị viên máy in.',
    'Depreciation Rule Help' => 'Quy tắc khấu hao được quy định bởi quy tắc khấu hao thiết bị.',
    'Batch Delete' => 'Xóa hàng loạt thiết bị',
    'Batch Force Delete' => 'Loại bỏ hàng loạt thiết bị (không thể khôi phục)',
    'Batch Force Delete Confirm' => 'Bạn có chắc chắn muốn buộc xóa các thiết bị đã chọn không? (Thao tác này không thể đảo ngược)',
    'Batch Delete Confirm' => 'Bạn có chắc chắn muốn xóa thiết bị đã chọn không?',
    'Batch Discard' => 'Thiết bị phế liệu số lượng lớn',
    'Batch Discard Confirm' => 'Bạn có chắc chắn muốn xóa thiết bị đã chọn không?',
    'Delete' => 'xóa thiết bị',
    'ReDelete' => 'Hoàn tác xóa',
    'Delete Confirm' => 'Xác nhận loại bỏ thiết bị',
    'ReDelete Confirm' => 'Xác nhận khôi phục thiết bị',
    'Delete Confirm Description' => 'Xóa thiết bị cũng sẽ xóa tất cả thông tin được liên kết với thiết bị đó',
    'ReDelete Confirm Description' => 'Khôi phục thiết bị sẽ không khôi phục tất cả thông tin trước đó được liên kết với nó',
    'Discard' => 'Thiết bị phế liệu',
    'ReDiscard' => 'hoàn tác mẩu tin lưu niệm',
    'Discard Confirm' => 'Xác nhận thiết bị hết tuổi thọ',
    'Discard Confirm Description' => 'Bạn có chắc chắn để loại bỏ thiết bị này?',
    'ReDiscard Confirm' => 'Bạn có chắc chắn muốn khôi phục thiết bị hết tuổi thọ không?',
    'ReDiscard Confirm Description' => 'Việc thu hồi thiết bị từ khi ngừng hoạt động không khôi phục tất cả thông tin trước đó được liên kết với thiết bị đó',
    'Track Create Update' => 'Chỉ định người dùng',
    'Update Delete' => 'trả lại thiết bị',
    'Batch Track Create Update' => 'Chỉ định hàng loạt người dùng',
    'Maintenance Create' => 'báo cáo thất bại',
    'Import' => 'nhập thiết bị',
    'Export To Excel' => 'Xuất sang Excel',
    'NG Description' => 'Mô tả lỗi',
    'Lend Track Create' => 'mượn thiết bị',
    'File Help' => 'Nhập hỗ trợ tệp xlsx và csv và các trường bắt buộc trong tiêu đề bảng [số tài sản, phân loại, nhà sản xuất] và hỗ trợ nhập trực tiếp tệp Excel được xuất bằng bình cà phê.',
    'Deleted' => 'thùng rác',
    'Track Delete' => 'giải ngũ',
    'Track Delete Confirm' => 'Xác nhận hủy liên kết người dùng này?',
    'No User' => 'nhàn rỗi',
  ],
  'fields' => [
    'asset_number_qrcode' => 'mã QR',
    'description' => 'mô tả',
    'category' => [
      'name' => 'Phân loại',
    ],
    'vendor' => [
      'name' => 'nhà chế tạo',
    ],
    'mac' => 'MAC',
    'ip' => 'IP',
    'photo' => 'ảnh',
    'admin_user' => [
      'name' => 'người sử dụng',
      'department' => [
        'name' => 'Phòng ban',
      ],
      'department_id' => 'Phòng ban',
    ],
    'price' => 'giá bán',
    'purchased' => 'Ngày mua',
    'expired' => 'ngày hết hạn',
    'part' => [
      'category' => [
        'name' => 'Phân loại',
      ],
      'asset_number' => 'Tên',
      'specification' => 'Sự chỉ rõ',
      'sn' => 'số seri',
      'vendor' => [
        'name' => 'nhà chế tạo',
      ],
    ],
    'software' => [
      'category' => [
        'name' => 'Phân loại',
      ],
      'name' => 'Tên',
      'version' => 'Phiên bản',
      'distribution' => 'Phương thức phát hành',
      'vendor' => [
        'name' => 'nhà chế tạo',
      ],
    ],
    'service' => [
      'name' => 'Tên',
    ],
    'depreciation' => [
      'name' => 'quy tắc khấu hao',
      'termination' => 'Ngày phế liệu',
    ],
    'asset_number' => 'Số tài sản',
    'category_id' => 'Phân loại',
    'vendor_id' => 'nhà chế tạo',
    'depreciation_id' => 'quy tắc khấu hao',
    'ng_description' => 'Mô tả lỗi',
    'ng_time' => 'thời gian thất bại',
    'user_same' => 'người dùng đã tồn tại',
    'user_id' => 'người sử dụng',
    'expiration_left_days' => 'Thời gian còn lại của bảo hành',
    'depreciation_price' => 'giá sau khi khấu hao',
    'file' => 'tài liệu',
    'depreciation_rule_id' => 'quy tắc khấu hao',
    'device_status' => 'tình trạng thiết bị',
    'no_user' => 'nhàn rỗi',
  ],
  'options' => [
  ],
];