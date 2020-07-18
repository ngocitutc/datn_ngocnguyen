<?php
const LOGIN = 'login';
const SHOW_LOGIN = 'show.login';
const LOGOUT = 'logout';
const HOME = 'home';
const FORGOT_PASSWORD_INDEX = 'forgot_password.index';

const USER_CREATE = 'user.create';
const USER_EXPORT_FILE = 'user.export_file';
const USER_INDEX = 'user.index';
const USER_LIST_TEACHER = 'user.list.teacher';
const USER_LIST_STUDENT = 'user.list.student';
const USER_LIST_PROJECT_STUDENT = 'user.list.project.student';

const TEACHER_TOPIC_INDEX = 'teacher.topic.index';
const TEACHER_TOPIC_CREATE = 'teacher.topic.create';
const TEACHER_TOPIC_STORE = 'teacher.topic.store';
const TEACHER_TOPIC_OFFER = 'teacher.topic.offer';
const TEACHER_STUDENT = 'teacher.topic.student';
const TEACHER_STUDENT_OFFER = 'teacher.student.offer';
const TEACHER_STUDENT_ACCEPT_OFFER = 'teacher.student.accept.offer';
const TEACHER_ACCEPT_TOPIC_STUDENT = 'teacher.accept.topic.student';
const TEACHER_REMOVE_TOPIC_STUDENT = 'teacher.remove.topic.student';
const TEACHER_RATE_PROJECT = 'teacher.rate.project';
const TEACHER_RATE_PROJECT_STORE = 'teacher.rate.project.store';

const STUDENT_TOPIC = 'student.topic';
const STUDENT_TOPIC_INFO = 'student.topic.info';
const STUDENT_REGISTER_TOPIC = 'student.register.topic';
const STUDENT_REGISTER_TOPIC_STORE = 'student.register.topic.store';
const STUDENT_TEACHER = 'student.teacher';
const STUDENT_TEACHER_INFO = 'student.teacher.info';
const STUDENT_PROJECT_ADD = 'student.project.add';
const STUDENT_PROJECT_INFO = 'student.project.info';
const STUDENT_PROCESS_PROJECT = 'student.progress.project';
const STUDENT_PROCESS_PROJECT_STORE = 'student.progress.project.store';
const STUDENT_PROJECT_STORE = 'student.project.store';
const STUDENT_TEACHER_REGISTER = 'student.teacher.register';

const DEAN_TOPIC = 'dean.topic';
const DEAN_CONFIRM_TOPIC_STUDENT = 'dean.confirm.topic.student';
const DEAN_REMOVE_TOPIC_STUDENT = 'dean.remove.topic.student';
const DEAN_TOPIC_ACTIVE = 'dean.topic.active';
const DEAN_TEACHER_STUDENT = 'dean.teacher.student';
const DEAN_SEMESTER = 'dean.semester';


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

const ROLES_EN = [
    DEAN => 'dean',
    TEACHER => 'teacher',
    STUDENT => 'student',
];

const SUBJECTS = [
  1 => 'Khoa học máy tính',
  2 => 'Mạng và hệ thống thông tin',
  3 => 'Công nghệ phần mềm',
];
const STATUS_TOPIC = [
    0 => 'Đang chờ kiểm duyệt',
    1 => 'Đã kiểm duyệt',
];

const OPEN = 1;
const CLOSE = 0;

const STATUS_STEP_STOP = 0;
const STATUS_STEP_WAITING = 1;
const STATUS_STEP_LEANING = 2;
const STATUS_STEP_DONE = 3;

const STATUS_STEP_TEXT = [
    STATUS_STEP_STOP => 'Đã huỷ bỏ',
    STATUS_STEP_WAITING => 'Đang chờ xác nhận',
    STATUS_STEP_LEANING => 'Đang hướng dẫn',
    STATUS_STEP_DONE => 'Đã đánh giá',
];

const STATUS_TOPIC_WAITING = 1;
const STATUS_TOPIC_WAITING_DEAN = 2;
const STATUS_TOPIC_DOING = 3;
const STATUS_TOPIC_DONE = 4;

const STATUS_TOPIC_TEXT = [
    STATUS_TOPIC_WAITING => "Đang chờ giảng viên phê duyệt",
    STATUS_TOPIC_WAITING_DEAN => "Đang chờ xác nhận từ lãnh đạo khoa",
    STATUS_TOPIC_DOING => "Đang chờ giảng viên đánh giá",
    STATUS_TOPIC_DONE => "Giảng viên đã đánh giá",
];

const GENDER = [
    0 => 'Nam',
    1 => 'Nữ',
];


