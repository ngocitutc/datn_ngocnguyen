<?php
const LOGIN = 'login';
const SHOW_LOGIN = 'show.login';
const LOGOUT = 'logout';
const HOME = 'home';

const USER_CREATE = 'user.create';
const USER_INDEX = 'user.index';
const TEACHER_TOPIC_INDEX = 'teacher.topic.index';
const TEACHER_TOPIC_CREATE = 'teacher.topic.create';

const ADMIN = 0;
const DEAN = 1;
const TEACHER = 2;
const STUDENT = 3;

const STR_FLASH_ERROR = 'error';
const STR_FLASH_SUCCESS = 'success';

const ROLES = [
    DEAN => 'Lãnh đạo khoa',
    TEACHER => 'Giảng viên',
    STUDENT => 'Sinh viên',
];

const SUBJECTS = [
  1 => 'Khoa học máy tính',
  2 => 'Hệ thống thông tin',
];

