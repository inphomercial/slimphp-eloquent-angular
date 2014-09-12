<?php

class UserSeed {

    function run()
    {
        $user = new User;
        $user->username = "Test User";
	$user->save();

	$user1 = new User;
	$user1->username = "Slauppp";
	$user1->save();
    }
}
