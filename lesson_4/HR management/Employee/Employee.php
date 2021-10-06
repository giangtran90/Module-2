<?php
namespace Employee;

class Employee
{
    //Họ, Tên, Ngày sinh, Địa chỉ, Vị trí công việc
    private string $firstName;
    private string $lastName;
    private string $birthOfDate;
    private string $address;
    private string $jobTitle;

    public function __construct($ts_firstName = '', $ts_lastName = '', $ts_birthOfDate = '', $ts_address = '', $ts_jobTitle = '') 
    {
        $this->firstName    = $ts_firstName;
        $this->lastName     = $ts_lastName;
        $this->birthOfDate  = $ts_birthOfDate;
        $this->address      = $ts_address;
        $this->jobTitle     = $ts_jobTitle;
    }
    // setter and getter property
    public function setFirstName($ts_firstName): void
    {
        $this->firstName    = $ts_firstName;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName($ts_lastName): void
    {
        $this->lastName     = $ts_lastName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setBirthOfDate($ts_birthOfDate): void
    {
        $this->birthOfDate  = $ts_birthOfDate;
    }
    public function getBirthOfDate(): string
    {
        return $this->birthOfDate;
    }

    public function setAddress($ts_address): void
    {
        $this->address      = $ts_address;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function setJobTitle($ts_jobTitle): void
    {
        $this->jobTitle     = $ts_jobTitle;
    }
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }
}
?>