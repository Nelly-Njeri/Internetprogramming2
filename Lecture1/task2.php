<?php
// Scenario 2: George's Journey to Nakuru

// Distance between Nairobi and Nakuru (in km)
$distance = 150;

// Time of departure (in hours)
$time_departure = 8;

// Time of arrival (in hours)
$time_arrival = 12;

// Calculate the time taken for the journey (in hours)
$time_taken = $time_arrival - $time_departure;

// Calculate George's average speed (in km/h)
$average_speed = $distance / $time_taken;

// Output the average speed
echo "George's average speed: " . $average_speed . " km/h";
?>
