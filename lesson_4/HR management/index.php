<?php
include_once "Employee/Employee.php";
include_once "EmployeeManager/EmployeeManager.php";

use Services\EmployeeManager;
use Employee\Employee;

// Hiển thị danh sách nhân sự
// Thêm một nhân sự mới
// Xem chi tiết thông tin nhân sự
// Xoá một nhân sự
// Chỉnh sửa thông tin nhân sự

$employee_1 = new Employee();
$employee_1->setFirstName('Tran Hoang');
$employee_1->setLastName('Giang');
$employee_1->setBirthOfDate('29/10/1990');
$employee_1->setAddress('Quang Tri');
$employee_1->setJobTitle('Manager');

// Thêm một nhân sự mới
$employee_2 = new Employee('Tran Hoang', 'B', '30/10/1990', 'Ha Noi', 'Employee');

$employeeManager = new EmployeeManager();
$employeeManager->addEmployee($employee_1);
$employeeManager->addEmployee($employee_2);


// Hiển thị danh sách nhân sự
$employees = $employeeManager->getEmployee();
foreach ($employees as $employee) 
{
    echo "<br/>" . "<b>Name: </b>" . $employee->getFirstName() . " " . $employee->getLastName() . 
    "<br/> " . "<b>Birth od date:</b> " . $employee->getBirthOfDate() . "<br/>" . "<b>Address: </b>" .
    $employee->getAddress() . "<br/>" . "<b>Job Title: </b>" . $employee->getJobTitle() . "<br/>";
}
// echo "<pre>";
// print_r($employeeManager);
// die();
echo "<hr/>";
//Xoá một nhân sự
$employeeManager->deleteEmployee(1);
$employees = $employeeManager->getEmployee();
foreach ($employees as $employee) 
{
    echo "<br/>" . "<b>Name: </b>" . $employee->getFirstName() . " " . $employee->getLastName() . 
    "<br/>" . "<b>Birth od date:</b> " . $employee->getBirthOfDate() . "<br/>" . "<b>Address: </b>" .
    $employee->getAddress() . "<br/>" . "<b>Job Title: </b>" . $employee->getJobTitle() . "<br/>";
}

?>