<?php

include "../../../app/services/cityService.php";
include "../../../app/Utilities/Responce.php";



echo "cities endpoint is here";

$city = new cityService();
$result = $city->getCity([1,2,3,44,88]);
echo Response::respond($result,200);