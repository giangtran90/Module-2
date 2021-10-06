<?php
$student = array(
    '08T1016' => "Phan Văn Cương",
    '08T1013' => "Nguyễn Văn Hoàng",
    '08T1015' => "Bùi Việt Đức",
);
// Xóa Bùi Việt Đức ra khỏi mảng $student
unset($student['08T1015']);
print_r($student);
?>
?>