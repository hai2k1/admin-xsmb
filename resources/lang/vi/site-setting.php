<?php 
return [
  'labels' => [
    'title' => 'cấu hình',
    'description' => 'Cấu hình liên quan đến trang web',
    'setting' => 'cấu hình',
    'Site Url Help' => 'Tên miền trang web xác định đường dẫn hiển thị của tài nguyên tĩnh (ảnh đại diện, ảnh, v.v.), đường dẫn này phải giống với đường dẫn địa chỉ APP trong tệp env và có thể bao gồm số cổng, chẳng hạn như http: // www. baidu.com:8000.',
    'Site Logo Text' => 'Mức độ ưu tiên của hiển thị LOGO văn bản thấp hơn so với hình ảnh. Khi không có hình ảnh nào được tải lên làm LOGO, mục này sẽ có hiệu lực.',
    'Site Debug Help' => 'Khi bật chế độ gỡ lỗi, thông tin chụp ngoại lệ sẽ được hiển thị và khi tắt chế độ này, chỉ mã trạng thái 500 sẽ được trả về.',
  ],
  'fields' => [
    'site_url' => 'tên miền trang web',
    'site_title' => 'Tiêu đề trang web',
    'site_logo_text' => 'Biểu trưng văn bản trang web',
    'site_logo' => 'Biểu trưng hình ảnh trang web',
    'site_logo_mini' => 'LOGO hình ảnh trang web (thu nhỏ)',
    'site_debug' => 'chế độ kiểm tra sửa lỗi',
    'site_lang' => 'ngôn ngữ trang web',
  ],
  'options' => [
  ],
];