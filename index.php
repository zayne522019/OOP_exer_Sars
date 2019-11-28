
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="gray">
	<center><h1>Cars</h1></center>
<br>
<br>
<br>

<?php   


	class Vehicle{
			//declaring member variable here// 
		var $type;
		var $fuel;
		var $passCap;
		var $speed;
		//declaring member functions here//
		function setType($type){
			$this->type = $type;
		}
				function getType(){
				echo "<h2><center>Vehicle Type:$this->type</center>";
			}
		function setFuel($fuel){
			$this->fuel = $fuel;
			}
				function getFuel(){
				echo "<center>Fuel Type: $this->fuel</center>";
			}
		function setCapacity($passCap){
			$this->passCap = $passCap;
			}
				function getCapacity(){
					echo "<center>Passenger Capacity: $this->passCap</center>";
				}
		function setSpeed($speed){
			$this->speed= $speed;
			}
				function getSpeed(){
				echo "<center>Maximum Speed: $this->speed</center>";
				}
		}
		$type = new Vehicle();
		$type->setType("Sports Car");
		$type->getType();
			$fuel = new Vehicle();
		$fuel->setFuel("Premium");
		$fuel->getFuel();
			$passCap = new Vehicle();
		$passCap->setCapacity("2 seaters");
		$passCap->getCapacity();
			$speed = new Vehicle();
		$speed->setSpeed("250 km/h <br/> <br/>");
		$speed->getSpeed();


		$type = new Vehicle();
		$type->setType("Jeepney");
		$type->getType();
			$fuel = new Vehicle();
		$fuel->setFuel("Diesel");
		$fuel->getFuel();
		$passCap = new Vehicle();
		$passCap->setCapacity("50 seaters");
		$passCap->getCapacity();
				$speed = new Vehicle();
		$speed->setSpeed("120 km/h");
		$speed->getSpeed();



?>
</body>
</html>
