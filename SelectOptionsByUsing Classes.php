<?php
class element
{
	private $label;
	private $name;
	private $value;
	public function __construct()
	{
	}
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setValue($value) 
	{
			$this->value = $value;
	}
	public function getValue() 
	{
		return $this->value;
	}
	public function setLabel($label) 
	{
		$this->label = $label;
	}
	public function getLabel()
 	{
		return $this->label;
	}
}
?>
<?php
class Select extends element 
{
	protected $options;
	public function __construct() 
	{
		parent::__construct();
		$this->options = array();   //if you create an option they were put into array..here array is created when you set they were push
	}
	public function setOption($option) 
	{
		$this->options[] = $option;
	}
	private function getOptions()
	 {
		return (array)$this->options;
	}
	public function render() 
		{
			echo $this->getLabel() . ": <br />\n";
			echo "<select name=\"" . $this->getName() . "\">\n";
			foreach ($this->getOptions() as $opt) 
			{
			echo $opt->render();
			}
			echo "</select>";
		}
}
?>
<?php
class Option extends element {
public function __construct($value='', $label='')
 {
	parent::__construct();
	$this->setValue($value);
	$this->setLabel($label);
}
public function render() 
{
	echo "<option value=\"" . $this->getValue() . "\">" . $this->getLabel() ."</option>\n";
}
}
?>
<html>
<body>
<h2>Generating Form Selection Lists</h2>
<?php
if (!isset($_POST['submit'])) {
?>
<form method="post" action="SelectOptionsByUsing Classes.php">
<?php
$fruits = new Select();
$fruits->setLabel('Fruits');
$fruits->setName('fruit_sel');
$fruits->setOption(new Option('Oranges', 'Oranges'));
$fruits->setOption(new Option('Strawberries', 'Strawberries'));
$fruits->setOption(new Option('Pineapples', 'Pineapples'));
$fruits->setOption(new Option('Bananas', 'Bananas'));
$fruits->render();
?>
<p />
<?php
// generate selection list #2
$metals = new Select();
$metals->setLabel('Metals');
$metals->setName('metal_sel');
$metals->setOption(new Option('Iron', 'Iron'));
$metals->setOption(new Option('Silver', 'Silver'));
$metals->setOption(new Option('Gold', 'Gold'));
$metals->setOption(new Option('Platinum', 'Platinum'));
$metals->render();
?>
<p />
<?php
// generate selection list #3
$animals = new Select();
$animals->setLabel('Animals');
$animals->setName('animal_sel');
$animals->setOption(new Option('Lion', 'Lion'));
$animals->setOption(new Option('Hyena', 'Hyena'));
$animals->setOption(new Option('Fox', 'Fox'));
$animals->render();
?>
<p />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
} else
 {
	var_dump($_POST);
}
?>
</body>
</html>
