<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function bosveriler($planet)
{
    return $planet !== "" && $planet !== NULL;
}
$filteredPlanets = array_values(array_filter($planets, 'bosveriler'));
//
$rand_key = array_rand($filteredPlanets, 1);
//
//$random_planet = [$filteredPlanets[$rand_key]];
function vericagir($n){
    global $filteredPlanets , $rand_key;
    $rand_keys = array_rand($filteredPlanets, $n);
    if (is_array($rand_keys)) {
        return array_map(function($key) use ($filteredPlanets) {
            return $filteredPlanets[$key];
        }, $rand_keys);
    } else {
        // Tek eleman seçildiyse, direkt döndür
        return [$filteredPlanets[$rand_keys]];
    }
}
print_r(vericagir(2));
print_r(vericagir(3));
print_r(vericagir(2));
print_r(vericagir(4));
print_r(vericagir(5));
