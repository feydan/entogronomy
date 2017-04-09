<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 4/8/2017
 * Time: 8:07 PM
 */

namespace App\Http\Controllers;


class interactionController
{
    public function input(Request $request)
    {

    }
}

$plant_id = mysqli_real_escape_string($db, $_POST['plant_id']);
$insect_id = mysqli_real_escape_string($db,$_POST['insect_id']);
$type = mysqli_real_escape_string($db,$_POST['type']);
$verb = mysqli_real_escape_string($db, $_POST['verb']);
$location = mysqli_real_escape_string($db,$_POST['location']);
$lat = mysqli_real_escape_string($db,$_POST['lat']);
$long = mysqli_real_escape_string($db,$_POST['long']);
$description = mysqli_real_escape_string($db,$_POST['description']);

if (mysql_query("INSERT INTO `interactions` (`plant_id`, `insect_id`, `type`, 'verb', 'location', 'lat', 'long', 'description') VALUES ('".$plant_id."','".$insect_id."','".$type."','".$verb."','".$location."','".$lat."','".$long."','".$description."','".$type."')"))
    echo"successfully inserted";
else
    echo "failed";