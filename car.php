<?php

class Car {
  private $name;
  private $side_mirrors;
  private $tyres;
  private $horn;
  private $a;
  private $v1;
  private $v2;
  private $t ;

  public function __construct($name, $side_mirrors=2, $tyres=4, $horn=TRUE ) {
    $this->name=$name;
    $this->side_mirrors=$side_mirrors;
    $this->tyres=$tyres;
    $this->horn=$horn;
    // $this->a=$a;

    echo "Initializing " . __CLASS__ . " model." . "<br>";
  }

  public function start(){
    echo "Engine has started..." . "<br>";
    echo "Checking status ..." . "<br>";

    if($this->name=null){
      echo "Status not OK. Not save for driving." . "<br>";
    } else{
      echo "This is " . $this->name . " car <br>";
    }
    echo "Checking mirrors..." ."<br>";
    if($this->side_mirrors<2){
      echo "One mirror missing..." . "<br>";
    } else{
      echo "Mirrors OK" ."<br>";
    }
    //
    echo "Checking Tyres...." ."<br>";
    if($this->tyres<4){
      echo "Tyre's error..." . "<br>";
    } else{
      echo "Tyres OK" ."<br>";
    }
    //
    echo "Checking horn" ."<br>";
    if($this->horn=FALSE){
      echo "Horn not working" . "<br>";
    } else{
      echo "Horn is OK" ."<br>";
    }
  }

//  GEARs
  public function gearOne($v1=0, $v2=25, $t=100){
    // the formula I am using here is: a = (v2 - v1)/t
    // a: acceleration
    // v1: initial speed
    // v2: final speed
    // t: time
    echo "Gear one initiated" . "<br>";
    echo "You're accelerating @ " .  $this->a = ($v2 - $v1)/$t . "<br>";
    return $this->a = ($v2 - $v1)/$t;
  }
  public function gearTwo($v1=0, $v2=39, $t=70){

    echo "Gear two initiated" . "<br>";
    echo "You're accelerating @ " .  $this->a = ($v2 - $v1)/$t . "<br>";
    return $this->a = ($v2 - $v1)/$t;
  }
  public function gearThree($v1=0, $v2=24, $t=34){
    echo "Gear three initiated" . "<br>";
    echo "You're accelerating @ " .  $this->a = ($v2 - $v1)/$t . "<br>";
    return $this->a = ($v2 - $v1)/$t;
  }
  public function gearFour($v1=0, $v2=40, $t=3){
    echo "Gear four initiated" . "<br>";
    echo "You're accelerating @ " .  $this->a = ($v2 - $v1)/$t . "<br>";
    return $this->a = ($v2 - $v1)/$t;
  }
  public function stop($v1=0, $v2=0, $t=0){
    echo "Engine stop initiated" . "<br>";
    echo $this->a = ($v2 - $v1)/$t;
  }

}

$honda = new Car('Honda', 2, 4, FALSE );
$honda->start();
$honda->gearOne();
$honda->gearTwo();
$honda->gearThree();
$honda->gearFour();



?>
