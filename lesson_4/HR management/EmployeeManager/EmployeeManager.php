<?php
namespace Services;

class EmployeeManager
{
    private array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    // Thêm một nhân sự mới
    // Xem chi tiết thông tin nhân sự
    // Chỉnh sửa thông tin nhân sự
    public function addEmployee($ts_employee): void
    {
        $this->employees[] = $ts_employee;
    }

    public function getEmployee(): array
    {
        return $this->employees;
    }
    // Xoá một nhân sự
    public function deleteEmployee($index): void
    {   
        $deleteEmployees = $this->employees;
        unset($deleteEmployees[$index]);
        $this->employees = $deleteEmployees;
    }
}
?>