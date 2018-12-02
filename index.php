<?php

interface Transport
{
    public function move($km);

    public function moveLeft($km);//Указать длину поворота

    public function moveRight($km);//Указать длину поворота

    public function stop();

    public function start();
}


class Car implements Transport
{
    private $fuel = null;

    public function __construct($fuel)
    {
        $this->fuel = $fuel;
    }

    public function start() //Проверка есть ли топливо в баке
    {
        if ($this->fuel > 0) {
            return 'We have ' . $this->fuel . ' liters of fuel and can move. <br>';
        }
        return 'Car can\'t move because no fuel.<br>';
        // TODO: Implement start() method.
    }

    public function move($km)
    {
        $rate = 5; //Расход 5л на 100км
        $consumption = $km / 100 * $rate; //Кол-во потраченного топлива
        $maxKm = $this->fuel / $rate * 100; // Сколько можно проехать на этом топливе

        if ($km > 0) { //нужно ли ехать
            if ($this->fuel > 0 and $maxKm >= $km) { //Проверка есть ли топливо и хватит ли его
                $this->fuel = $this->fuel - $consumption;
                return 'Car move forward ' . $km . 'km and have ' . $this->fuel . ' liters of fuel<br>';
            }
            return 'We have ' . $this->fuel . ' liters of fuel and can move ' . $maxKm . 'km. We don\'t move.<br>';
        }
        return 'We are arrived. <br>';
    }

    public function moveLeft($km) //Указать длину поворота
    {
        if($this->fuel > 0){
            $this->move($km);
            return 'Car turns Left and moved ' . $km . 'km<br>';
        }
        return 'No fuel to move Left.<br>';
        // TODO: Implement moveLeft() method.
    }

    public function moveRight($km) //Указать длину поворота
    {
        if($this->fuel > 0){
            $this->move($km);
            return 'Car turns Right and moved ' . $km . 'km<br>';
        }
        return 'No fuel to move Right.<br>';
        // TODO: Implement moveRight() method.
    }
    public function stop()
    {
        return 'Car don\'t move<br>';
        // TODO: Implement stop() method.
    }
    public function turnAround($km){
        if($this->fuel > 0){
            $this->move($km);
            return 'Car turns Around and moved ' . $km . 'km<br>';
        }
        return 'No fuel can\'t turn around.<br>';
    }
}

class Bus implements Transport
{
    private $passengers = null; //количество свободных мест

    public function __construct($passengers)
    {
        $this->passengers = $passengers;
    }

    public function start() //Проверка есть ли места в автобусе
    {
        if ($this->passengers > 0){
            return 'Bus have '. $this->passengers . ' places for passengers<br>';
        }
        return 'No places in the bus.<br>';
        // TODO: Implement start() method.
    }

    public function takeP($takeP){ // Сколько человек хочет зайти в автобус
        if ($this->passengers > 0 and $this->passengers >=$takeP){
            $this->passengers = $this->passengers - $takeP;
            return 'Bus take '. $takeP . ' passengers, left ' .$this->passengers .' free places for passengers.<br>';
        }
        return 'Cant\'t take passengers, maximum 30, now in the bus left ' . $this->passengers . ' free places.<br>';
    }
    public function move($km)
    {
        return 'Bus move forward '. $km .'km<br>';
        // TODO: Implement move() method.
    }

    public function moveLeft($km)
    {
        return 'Bus turns Left '. $km .'km<br>';
        // TODO: Implement moveLeft() method.
    }

    public function moveRight($km)
    {
        return 'Bus turns Right ' . $km . 'km<br>';
        // TODO: Implement moveRight() method.
    }
    public function stop()
    {
        return 'Bus stopped to take passengers<br>';
        // TODO: Implement stop() method.
    }
}


$car = new Car( 20); //Указать сколько топлива залили в бак
echo $car->start();
echo $car->move(4);
echo $car->moveRight(3);
echo $car->move(10);
echo $car->moveLeft(4);
echo $car->move(10);
echo $car->moveLeft(3);
echo $car->move(10);
echo $car->moveRight(4);
echo $car->move(10);
echo $car->turnAround(5);
echo $car->move(10);
echo $car->moveLeft(4);
echo $car->move(10);
echo $car->moveLeft(3);
echo $car->move(10);
echo $car->moveLeft(3);
echo $car->move(10);
echo $car->moveLeft(3);
echo $car->move(10);
echo $car->moveRight(4);
echo $car->move(10);
echo $car->moveLeft(3);
echo $car->move(20);
echo $car->stop();
echo '<hr>';

$bus = new Bus(30);
echo $bus->start();
echo $bus->move(5);
echo $bus->moveLeft(3);
echo $bus->move(10);
echo $bus->moveLeft(3);
echo $bus->stop();
echo $bus->takeP(2);
echo $bus->start();
echo $bus->move(15);
echo $bus->stop();
echo $bus->takeP(10);
echo $bus->start();
echo $bus->move(5);
echo $bus->moveLeft(2);
echo $bus->move(2);
echo $bus->stop();
echo $bus->takeP(10);
echo $bus->start();
echo $bus->move(10);
echo $bus->moveLeft(1);
echo $bus->moveRight(1);
echo $bus->move(10);
echo $bus->stop();
echo $bus->takeP(5);
echo $bus->start();
echo $bus->move(10);
echo $bus->stop();
echo $bus->takeP(5);