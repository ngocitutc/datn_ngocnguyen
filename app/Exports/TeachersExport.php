<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class TeachersExport implements FromArray
{
    public function array(): array
    {
        return [
            ['Mã đăng nhập', 'Mật khẩu', 'Tên sinh viên', 'Bộ môn', 'Ngày sinh', 'Giới tính', 'Điện thoại', 'Email', 'Địa chỉ'],
            ['11122233', '12345678', 'Nguyễn Kim Sao', 'Mạng máy tính', '16/10/1997', 'Nữ', '0999999999', 'kimsao@gmail.com', 'Hà Nội'],
            ['11122234', '12345678', 'Hoàng Văn Hà', 'Khoa học máy tính', '30/03/1998', 'Nam', '0999999999', 'hoangha@gmail.com', 'Hà Nội'],
        ];
    }
}
