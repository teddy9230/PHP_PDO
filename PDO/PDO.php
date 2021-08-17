<?php

var_dump(PDO::getAvailableDrivers());
echo '<br>';
print_R(PDO::getAvailableDrivers());
echo '<br>';
print(PDO::getAvailableDrivers());
echo '<br>';

// dd是laravel
// dd(PDO::getAvailableDrivers());