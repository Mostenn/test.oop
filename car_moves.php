<?php
abstract class Transport
{
    public function move(){
        return 'MoVe';
    }
    public function rotateLeft(){
        return 'Left';
    }
    public function rotateRight(){
        return 'Right';
    }
    public function turnAround(){
        return 'turnAround';
    }
}
class Car extends Transport {
    private $name = 'Car';
    public function move()
    {
        return $this->name . ' ' . parent::move() . ' Straight';
    }
    public function rotateLeft()
    {
        return $this->name . ' ' . parent::move() . ' Left';
    }
    public function rotateRight()
    {
        return $this->name . ' ' . parent::move() . ' Right';
    }
    public function turnAround()
    {
        return $this->name . ' ' . 'is turned around';
    }
}
?><hr><?
$car = new Car();
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateRight();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateRight();?><br><?
echo $car->move();?><br><?
echo $car->turnAround();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><br><?
echo $car->rotateRight();?><br><?
echo $car->move();?><br><?
echo $car->rotateLeft();?><br><?
echo $car->move();?><hr>
