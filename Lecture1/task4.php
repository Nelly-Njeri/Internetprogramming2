<?php
// Constants
const HOURLY_RATE = 10;
const LUNCH_ALLOWANCE = 200;
const INCOME_TAX_RATE = 0.30;

// Function to calculate basic salary
function calculate_basic_salary($hours_worked) {
    return $hours_worked * HOURLY_RATE;
}

// Function to calculate gross salary
function calculate_gross_salary($basic_salary) {
    return $basic_salary + LUNCH_ALLOWANCE;
}

// Function to calculate income tax
function calculate_income_tax($gross_salary) {
    return $gross_salary * INCOME_TAX_RATE;
}

// Function to calculate net pay
function calculate_net_pay($gross_salary, $income_tax) {
    return $gross_salary - $income_tax;
}

// Read number of hours worked from the keyboard
echo "Enter the number of hours worked: ";
$hours_worked = (int) readline();

// Calculate basic salary
$basic_salary = calculate_basic_salary($hours_worked);

// Calculate gross salary
$gross_salary = calculate_gross_salary($basic_salary);

// Calculate income tax
$income_tax = calculate_income_tax($gross_salary);

// Calculate net pay
$net_pay = calculate_net_pay($gross_salary, $income_tax);

// Output results
echo "Basic Salary: $basic_salary\n";
echo "Gross Salary: $gross_salary\n";
echo "Income Tax: $income_tax\n";
echo "Net Pay: $net_pay\n";
?>
