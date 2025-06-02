<?php
abstract class Transport
{
    public $road;
    public $fuel;
    public $capacity;

    public function __construct($road, $fuel, $capacity)
    {
        $this->road = $road;
        $this->fuel = $fuel;
        $this->capacity = $capacity;
    }

    abstract public function move();
    abstract public function fuelType();
    abstract public function capacity(): int;
}

class Car extends Transport
{
    public function move()
    {
        return "Car moves on {$this->road}. \n";
    }
    public function fuelType()
    {
        return "Fuel: {$this->fuel} \n";
    }
    public function capacity(): int
    {
        return $this->capacity;
    }
}
class Bicycle extends Transport
{
    public function move()
    {
        return "Bicycle moves on {$this->road}. \n";
    }
    public function fuelType()
    {
        return "Fuel: {$this->fuel} \n";
    }
    public function capacity(): int
    {
        return $this->capacity;
    }
}
class Airplane extends Transport
{
    public function move()
    {
        return "Airplane flies on {$this->road}. \n";
    }
    public function fuelType()
    {
        return "Fuel: {$this->fuel} \n";
    }
    public function capacity(): int
    {
        return $this->capacity;
    }
}

$road = "roads";
$fuel = "Gasoline";
$capacity = 5;

$car1 = new Car($road, $fuel, $capacity);
echo $car1->move();
echo "\n";
echo $car1->fuelType();
echo "\n";
echo "Capacity: {$car1->capacity()}";
echo "\n";
// bike
$road = "Pedaling";
$fuel = "Human Power";
$capacity = 1;

$car2 = new Car($road, $fuel, $capacity);
echo $car2->move();
echo "\n";
echo $car2->fuelType();
echo "\n";
echo "Capacity: {$car2->capacity()}";
echo "\n";
// airplane
$road = "the air";
$fuel = "Jet Fuel";
$capacity = 180;

$car3 = new Car($road, $fuel, $capacity);
echo $car3->move();
echo "\n";
echo $car3->fuelType();
echo "\n";
echo "Capacity: {$car3->capacity()}";
echo "\n";
