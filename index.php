<?php

    require 'User.php';

    //User 1

    $user_1 = new User('Alberto', 'Bertollo', 'alberto.bertollo@gmail.com');

    $user_1->setAge(26);

    $user_1->setCountry('Italy');

    echo '<h2>Utente 1: </h2>';

    $user_1->getUser();

    //User 2


    $user_2 = new User('Loris', 'Rossi', 'loris.rossi@gmail.com', 30, 'Italy');
    echo '<h2>Utente 2:</h2>';

    $user_2->getUser();


?>
