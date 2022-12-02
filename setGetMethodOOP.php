<?php
//Bài 2: Bổ sung vào lớp Employee các thuộc tính khác name, như tuổi, phone và các phương thức set, get tương ứng
//cho các thuộc tính. Hàm toString thì echo đầy đủ thông tin


class Employee
{
    private $name, $age, $phone;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
            $this->age = $age;
    }

    public function setPhone($phone)
    {
            $this->phone = $phone;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getAge():string
    {
        return $this->age;
    }

    public function getPhone():string
    {
        return $this->phone;
    }


    public function toString()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Phone: " . $this->phone . "<br>";
    }
}

$employee1 = new Employee();
$employee1->setName('Employee1');
$employee1->setAge(23);
$employee1->setPhone(123456789);

$employee1->toString();

