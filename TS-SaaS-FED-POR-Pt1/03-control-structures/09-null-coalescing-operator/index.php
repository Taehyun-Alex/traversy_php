<?php


$color = isset($favouriteColor) ? $favouriteColor : (isset($secondFavouriteColor) ? $secondFavouriteColor : "blue");
$color = $favouriteColor ?? $secondFavouriteColor ?? "blue";

echo "$color";

