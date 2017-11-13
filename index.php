<?php

include_once './Event.php';
include_once './Coordinates.php';

$coordinatesList = [];
$numEvents = 0;
$coordinatesWithEventsList = [];

/**
 * @param $a
 * @param $b
 * @return int
 */
function coordinate_comparison($a, $b) {
	if ($a===$b) {
		return 0;
	}
	return ($a['distance']>$b['distance'])?1:-1;
}

/**
 * @param $x
 * @param $y
 * @param $x1
 * @param $y1
 * @return number
 */
function generateDistance($x, $y, $x1, $y1)
{
	return abs($x - $x1) + abs($y - $y1);
}

for($x = -10; $x < 11; $x++){
	$coordinatesList[$x] = [];
	for($y = -10; $y < 11; $y++){
		$coordinatesList[$x][$y] = null;

		$hasEvent = rand(0,1);
		$nextId = $numEvents + 1;
		$numTickets = rand(0,1000);

		$price = rand(0.01*2, 99.99*2) / 2;

		if ($hasEvent == 1){
			$event = new Event($nextId, $numTickets, $price);
			$coordinatesList[$x][$y] = new Coordinates($x,$y);
			$coordinatesList[$x][$y]->setEvent($event);
			$numEvents++;
		} else {
			$coordinatesList[$x][$y] = new Coordinates($x,$y);
        }

	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Viagogo Test - Closest Events</title>
</head>
<body>

<h1>Please Input Coordinates</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="number" name="x" min="-10" max="10" required />,<input type="number" name="y" min="-10" max="10" required />
	<br/>
	<input type="submit" name="submit" />
</form>

<?php
if (isset($_POST['submit'])) {
	$x = $_POST['x'];
	$y = $_POST['y'];

	for($x1 = -10; $x1 < 11; $x1++){
		$coordinatesWithEventsList = [];
		for($y1 = -10; $y1 < 11; $y1++) {
			if ($coordinatesList[$x1][$y1] != null && $coordinatesList[$x1][$y1]->getEvent() != null) {
				$coordinatesWithEventsList[] = ['coordinate' => $coordinatesList[$x1][$y1], 'distance' => generateDistance($x,$y,$x1,$y1)];
			}
		}
	}

	usort($coordinatesWithEventsList, 'coordinate_comparison');

    echo 'Closest events to x: '.$x.', y: '.$y.'<br>';

	for($z = 0; $z < 5; $z++){

	    echo 'Event '.$coordinatesWithEventsList[$z]['coordinate']->getEvent()->getId().' - $'.$coordinatesWithEventsList[$z]['coordinate']->getEvent()->getPrice().', Distance: '.$coordinatesWithEventsList[$z]['distance']. '<br>';
    }
}
?>

</body>
</html>
