<?php

include './Dog.php';
include './Animal/Dog.php';

use Animal\Dog as Dog2;

new Dog();
new Dog2();