<?php
// Khai bao mot doi tuong
// Tinh dong goi cua doi tuong: public, protected, private
class User {
    // Thuoc tinh cua doi tuong
    public $name = '';
    protected $old = 25;

    // Phuong thuc cua doi tuong
    function getName() {
        echo "My name is Tai.";
    }

    function getOld() {
        return $this->old;
    }

    function testGetOldPrivateUser() {
        echo $this->old;
    }
}
echo "User";
echo '<br/>';

// Khoi tao doi tuong
$user = new User();

//Goi phuong thuc getName cua doi tuong User
$user->getName();
echo '<br/>';

echo $user->testGetOldPrivateUser();
echo '<br/>';


// Ke thua trong huong doi tuong
class Student extends User {
    // Da hinh huong doi tuong
    function getOld() {
        echo "20";
    }

    function testGetOldPrivateStudent() {
        echo $this->old;
    }
}
echo "Student";
echo '<br/>';

// Khoi tao doi tuong Student
$student = new Student();
$student->getName();
echo '<br/>';
echo $student->testGetOldPrivateStudent();
?>
