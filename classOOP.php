<?php
//Bài 1: Tạo lớp Employee, có 1 thuộc tính name, và 3 function setName , getName và toString
//function setName có 1 tham số là 1 chuỗi và thực hiện gán giá trị chuỗi đó cho name
//function getName trả về name
//Với hàm toString thì hiển thị ra màn hình "xin chào" + tên của nó. Sau đó thực hiện sử dụng lớp đó.


class Employee
{
    public $name;

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    public function toString()
    {
        echo "Xin chào " . $this->name;
    }
}

$employee1 = new Employee();
$employee1->setName('Employee1');
echo $employee1->toString();

