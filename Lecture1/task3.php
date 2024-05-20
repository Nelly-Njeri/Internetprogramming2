<?php
// Scenario 3: Robot's Distance Covered. This PHP program calculates the distance covered by a robot one hour after an electric motor starts rotating. The motor rotates 1000 times in a minute, moving the robot 2 cm with each rotation.
//  The program converts the total distance covered from centimeters to meters and outputs the result.

// Number of rotations per minute
$rotations_per_minute = 1000;

// Distance covered per rotation (in cm)
$distance_per_rotation = 2;

// Convert rotations per minute to rotations per hour
$rotations_per_hour = $rotations_per_minute * 60;

// Calculate the total distance covered in one hour (in cm)
$total_distance_covered = $rotations_per_hour * $distance_per_rotation;

// Convert total distance covered from cm to m
$total_distance_covered_in_m = $total_distance_covered / 100;

// Output the total distance covered in one hour (in meters)
echo "Total distance covered by the robot in one hour: " . $total_distance_covered_in_m . " meters";
?>
