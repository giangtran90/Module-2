<?php

class Student
{
    public string $name;
    public int $age;
    public string $gender;

    public function __construct($ts_name, $ts_age, $ts_gender)
    {
        $this->name = $ts_name;
        $this->age = $ts_age;
        $this->gender = $ts_gender;
        // goi phuong thuc
        $this->say();
    }

    // phuong thuc tu dinh nghia
    public function say()
    {
        // echo __METHOD__;
        echo 'Say::Hello';
    }

    public function setName($ts_name): void
    {
        $this->name = $ts_name;
    }
    
    public function getName(): String
    {
        return $this->name;
    }

    public function setAge($ts_age): void
    {
        $this->age = $ts_age;
    }
    
    public function getAge(): Int
    {
        return $this->age;
    }

    public function setGender($ts_gender): void
    {
        $this->gender = $ts_gender;
    }
    
    public function getGender(): String
    {
        return $this->gender;
    }

    protected function displayName(): String
    {
        return "Name is: " . $this->name;
    }

    // public function _destruct()
    // {
    //    echo __METHOD__;
    // }
}

class Person extends Student
{
    public function displayName(): String
    {
        return "Name is: " . $this->name;
    }
}

    $objStudent = new Student("Giang", 13, "Nu");
    //echo $objStudent->name;
    $objStudent->setName("Giang");
    $objStudent->setAge(32);
    $objStudent->setGender("Nam");

    echo '<pre>';
    print_r($objStudent);
    echo '</pre>';

    // $objPerson = new Person();
    // $objPerson->setName("Nam");
    // $objPerson->setAge(32);
    // $objPerson->setGender("Nam");

    // echo '<pre>';
    // print_r($objPerson);
    // echo '</pre>';

    // echo $objPerson->displayName();

?>