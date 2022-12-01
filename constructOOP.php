<?php
//Bài 1: Tạo lớp Employee, có 1 thuộc tính name, và 3 function setName , getName và toString
//function setName có 1 tham số là 1 chuỗi và thực hiện gán giá trị chuỗi đó cho name
//function getName trả về name
//Với hàm toString thì hiển thị ra màn hình "xin chào" + tên của nó. Sau đó thực hiện sử dụng lớp đó.
//làm sao new Employee('Mai') thì name tự được set là Mai

class Employee
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function toString()
    {
        echo "Xin chào " . $this->name;
    }
}

$employee1 = new Employee("Mai");
echo $employee1->toString();
?>