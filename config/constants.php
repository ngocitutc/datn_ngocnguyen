<?php
const LOGIN = 'login';
const SHOW_LOGIN = 'show.login';
const LOGOUT = 'logout';
const HOME = 'home';

const USER_CREATE = 'user.create';
const USER_INDEX = 'user.index';
const TEACHER_TOPIC_INDEX = 'teacher.topic.index';
const TEACHER_TOPIC_CREATE = 'teacher.topic.create';
const TEACHER_TOPIC_STORE = 'teacher.topic.store';
const TEACHER_TOPIC_OFFER = 'teacher.topic.offer';
const TEACHER_STUDENT = 'teacher.topic.student';
const TEACHER_STUDENT_OFFER = 'teacher.topic.student.offer';
const STUDENT_TOPIC = 'student.topic';
const STUDENT_TOPIC_INFO = 'student.topic.info';
const STUDENT_REGISTER_TOPIC = 'student.register.topic';
const STUDENT_TEACHER = 'student.teacher';
const STUDENT_TEACHER_INFO = 'student.teacher.info';
const STUDENT_PROJECT_ADD = 'student.project.add';
const STUDENT_PROJECT_INFO = 'student.project.info';


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
  3 => 'Công nghệ phần mềm',
];
const STATUS_TOPIC = [
    0 => 'Đang chờ kiểm duyệt',
    1 => 'Đã kiểm duyệt',
];

const OPEN = 1;
const CLOSE = 0;

