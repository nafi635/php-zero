<?php
class Automobile 
	{
		public $color;
		public $make;
		public $speed = 55;
		public function accelerate()
		 {
			$this->speed += 10;
			echo 'Accelerating to ' . $this->speed . '...';
		}
		public function brake()
		 {
			$this->speed -= 10;
			echo 'Slowing down to ' . $this->speed . '...';
		}
		public function turn() 
		{
			$this->brake();
			echo 'Turning...';
			$this->accelerate();
		}
	}
?>
<?php
$car = new Automobile;
$car->color = 'red';
$car->make = 'Ford Taurus';
$car->accelerate();
$car->turn();
?>
