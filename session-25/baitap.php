<?php
class Human
{
    public $name;
    public $old;
    public $birthYear;
    public $phoneNumber;

    public function register() {
        echo "Human register";
    }
    public function getInfo() {
        echo "Human get infomation";
    }
    public function eat() {
        echo "Human eat";
    }
    public function work() {
        echo "Human work";
    }
    private function getID() {
        echo "Human get ID";
    }
    public function callPrivateGetID() {
        echo "Human call private function getID";
    }
}

class Student extends Human
{
    public function learn() { }
    public function eat() {
        echo "Student eats.";
    }
}

echo "<strong>Human</strong>";
echo "<br>";
$human = new Human();
$human->register();
echo "<br>";
$human->getID();
echo "<br>";
$human->callPrivateGetID();
echo "<br>";


echo "<strong>Student</strong>";
echo "<br>";
$student = new Student();
$student->eat();
echo "<br>";
$student->work();
echo "<br>";
$student->callPrivateGetID();
echo "<br>";

?>
