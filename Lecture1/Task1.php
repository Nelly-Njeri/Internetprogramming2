<?php
// Employee's annual earnings
$annual_salary = 15000;

// Check if employee qualifies for a 10% year-end bonus
if ($annual_salary >= 15000) {
    // Calculate the bonus amount
    $bonus = 0.10 * $annual_salary;
} else {
    // Fixed bonus for employees earning less than 15000
    $bonus = 1000;
}

// Output the bonus amount
echo "Year-end bonus: KES " . $bonus;

// Year-end Bonus Calculation
// Demonstrates how to calculate a year-end bonus for employees based on their annual earnings.