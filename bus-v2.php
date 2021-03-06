<?php
interface Transport{
 public function move();
 public function turnLeft();
 public function turnRight();
 public function stop();
 public function startBus();
}
class Bus implements Transport{
 private $configuration = null;
 public function __construct($configuration){
  $this->configuration = $configuration;
 } 
 public function fuelExists(){
  return !empty($this->configuration['fuel']);
 }
 public function placesExists(){
    return !empty($this->configuration['humans']);
 }
 public function move(){
  return 'Bus move 5km straight ';
 }
 public function turnLeft(){
  return 'Bus turn Left';
 }
 public function turnRight(){
  return 'Bus turn Right';
 }
 public function stop(){
  return 'Bus Stop';
 }
 public function take(){
  return 'Bus take passengers';
 }
 public function startBus(){
  if(!$this->fuelExists()){
   return 'No Fuel';
  }
  if(!$this->placesExists()){
   return 'No Places';
  }
  
  return 'Bus Have Fuel';
  
 }
 
}

$configuration = [
 "fuel" =>"Rocket",
 "humans" => "35"
];

$bus = new Bus($configuration);
echo $bus->move(); ?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->turnRight();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?

echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->move();?><br><?
echo $bus->turnRight();?><br><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->move();?><br><?
echo $bus->turnRight();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?
echo $bus->move();?><br><?
echo $bus->move();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->move();?><br><?
echo $bus->turnRight();?><br><?
echo $bus->move();?><br><?
echo $bus->turnLeft();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?
echo $bus->move();?><br><?
echo $bus->stop();?><br><?
echo $bus->take();?><br><?
echo $bus->startBus();?><hr><?
echo $bus->move();?><hr>
