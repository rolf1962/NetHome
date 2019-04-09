<?php
    use Model\User;
    include 'Model/User.php';
    $user = new User();

    $user->setLastname("Jansen");
    $user->setFirstname("Rolf");
    $user->setBirthdate(new DateTime('1962/2/24'));
    
    print $user->getLastname();
    print $user->getFirstname();
    print $user->getBirthdate()->format("d.m.Y");
?>