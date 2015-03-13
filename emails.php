<?php

require_once __DIR__.'/vendor/autoload.php';

$faker = Faker\Factory::create();

$limit = 5000;

for ($i=0; $i < $limit; $i++) {
  echo $faker->email . " ";
}
