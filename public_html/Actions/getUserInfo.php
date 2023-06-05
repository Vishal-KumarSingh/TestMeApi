<?php

$user = getUserFromToken($post["token"]);

ResponseGenerator(1, $post["token"] , "" , array("user" => $user));
