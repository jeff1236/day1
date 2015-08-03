

<?php
class Car
{

public $make_model;
public $price;
public $miles;



function __construct ($car_model, $car_price =12, $car_miles = 100)
{
  $this->make_model = $car_model;
  $this->price = $car_price;
  $this->miles = $car_miles;
}


}

$car_one = new Car( "2014 Porsche 911" );
$car_two = new Car("2011 Ford F450" );
$car_three = new Car("2013 Lexus RX 350");
$car_four = new Car("Mercedes Benz CLS550");


$cars = array($car_one, $car_two, $car_three, $car_four);




?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
