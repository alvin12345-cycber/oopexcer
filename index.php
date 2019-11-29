
 <?php
class Book {
  // Properties
  public $Vihicle;
  public $fuel;
  public $passenger;
  public $speed;


  // Methods
  function set_Vihicle($Vihicle) {
    $this->Vihicle = $Vihicle;
  }
  function get_Vihicle() {
    return $this->Vihicle;
  }
  function set_fuel($fuel) {
    $this->fuel = $fuel;
  }
  function get_fuel() {
    return $this->fuel;
  }
   function set_passenger($passenger) {
    $this->passenger = $passenger;
  }
  function get_passenger() {
    return $this->passenger;
  }
  function set_speed($speed) {
    $this->speed = $speed;
  }
  function get_speed() {
    return $this->speed;
  }

}

$motorbike = new Vihicle();
$motorbike->set_vihicle('motorbike');
$motorbike->set_fuel('diesel');
$motorbike->set_passenger('3');
$motorbike->set_speed('70 km/h');

echo "Vihicle type: " . $motorbike->get_Vihicle();
echo "<br>";
echo "fuel type: " . $motorbike->get_fuel();
echo "<br>";
echo "passenger capacity: " . $motorbike->get_passenger();
echo "<br>";
echo "speed: ". $motorbike->get_speed();
?>

<br/>
<br/>



<?php
class Vihicle {
  // Properties
  public $Vihicle;
  public $fuel;
  public $passenger;
  public $speed;


  // Methods
  function set_Vihicle($Vihicle) {
    $this->Vihicle = $Vihicle;
  }
  function get_Vihicle() {
    return $this->Vihicle;
  }
  function set_fuel($fuel) {
    $this->fuel = $fuel;
  }
  function get_fuel() {
    return $this->fuel;
  }
   function set_passenger($passenger) {
    $this->passenger = $passenger;
  }
  function get_passenger() {
    return $this->passenger;
  }
  function set_speed($speed) {
    $this->speed = $speed;
  }
  function get_speed() {
    return $this->speed;
  }

}

$Nmax = new Vihicle();
$Nmax->set_Vihicle('Nmax');
$Nmax->set_fuel('Gasoline');
$Nmax->set_passenger('2');
$Nmax->set_speed('230km/h');

echo "Vihicle type: " . $Nmax->get_Vihicle();
echo "<br>";
echo "fuel type: " . $Nmax->get_fuel();
echo "<br>";
echo "passenger capacity: " . $Nmax->get_passenger();
echo "<br>";
echo "speed: ". $Nmax->get_speed();
?> 