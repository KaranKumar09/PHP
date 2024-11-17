<?php
// class Person{
//     public $name;
//     public $age;

//     public function _consturct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function displayPersonInfo(){
//         echo "Name: ".$this->name . "<br>";
//         echo "Age: ".$this->age . "<br>";
//     }
// }
// $person1 = new Person ("John Doe", 30);
// $person2 = new Person ("John Smith", 25);

// $person1->displayPersonInfo();
// $person2->displayPersonInfo();

class Car {
    public $make;
    public $model;
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    public function displayCarInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}
$car1 = new Car("Toyota", "Camry");
$car2 = new Car("Volvo", "Civic");
$car1->displayCarInfo();
$car2->displayCarInfo();
?>