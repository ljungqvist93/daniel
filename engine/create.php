<?php

include 'connect.php';

$title = rand(1000, 5000);

$slug = rand(1000,5000);

$insert = "INSERT INTO posts (title, slug, created_at) VALUES ($title, $slug, NOW())";
$exe = $db->prepare($insert);
$exe->execute([$title, $slug]);

header('Location: overview.php');