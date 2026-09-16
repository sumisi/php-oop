<?php
    require_once('../vendor/autoload.php');

    use App\Student;

    $user = new Student();

    echo $user->age,"<br>", $user->name;
?>