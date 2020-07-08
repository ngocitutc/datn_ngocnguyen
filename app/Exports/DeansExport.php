<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class DeansExport implements FromArray
{
    public function array(): array
    {
        return [
            ['Mã đăng nhập', 'Mật khẩu', 'Tên lãnh đạo khoa', 'Bộ môn', 'Ngày sinh', 'Giới tính', 'Điện thoại', 'Email', 'Địa chỉ'],
            ['11122235', '12345678', 'Nguyễn Kim Sao', 'Mạng máy tính', '16/10/1997', 'Nữ', '0999999999', 'nguyenkimsao@gmail.com', 'Hà Nội'],
            ['11122236', '12345678', 'Hoàng Văn Hà', 'Khoa học máy tính', '30/03/1998', 'Nữ', '0999999999', 'hoangvanha@gmail.com', 'Hà Nội'],
        ];
    }
}
