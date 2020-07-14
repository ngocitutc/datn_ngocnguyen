<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class StudentsExport implements FromArray
{
    public function array(): array
    {
        return [
            ['Mã đăng nhập', 'Mật khẩu', 'Quyền', 'Lớp', 'Khoá', 'Bộ môn', 'Trình độ', 'Tên giảng viên/sinh viên', 'Ngày sinh', 'Giới tính', 'Điện thoại', 'Email', 'Địa chỉ'],
            ['20165799', '12345678', 'Sinh viên', 'CNTT-1', 'K57','','', 'Nguyễn Thị Ngọc', '16/10/1997', 'Nữ', '0999999999', 'ngocnguye@gmail.com', 'Hà Nội'],
            ['20165798', '12345678', 'Sinh viên', 'CNTT-2', 'K57','','', 'Trần Thị Bích', '30/03/1998', 'Nữ', '0999999999', 'tranbich@gmail.com', 'Hà Nội'],
            ['20165798', '12345678', 'Giảng viên', '', '', 'Khoa học máy tính', 'Thạc sỹ', 'Trần Thị Bích', '30/03/1998', 'Nữ', '0999999999', 'tranbich@gmail.com', 'Hà Nội'],
            ['20165798', '12345678', 'Giảng viên', '', '', 'Mạng và hệ thống thông tin', 'Thạc sỹ', 'Trần Thị Bích', '30/03/1998', 'Nữ', '0999999999', 'tranbich@gmail.com', 'Hà Nội'],
            ['20165798', '12345678', 'Lãnh đạo khoa', '', '', 'Khoa học máy tính', 'Thạc sỹ', 'Trần Thị Bích', '30/03/1998', 'Nữ', '0999999999', 'tranbich@gmail.com', 'Hà Nội'],
            ['20165798', '12345678', 'Lãnh đạo khoa', '', '', 'Mạng và hệ thống thông tin', 'Thạc sỹ', 'Trần Thị Bích', '30/03/1998', 'Nữ', '0999999999', 'tranbich@gmail.com', 'Hà Nội'],
        ];
    }
}
