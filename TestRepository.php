<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $Comment = new Comment(email: "repotitory@test.com", comment: "hi");
// $newComment = $repository->insert($Comment);

// var_dump($newComment->getId());

// $Comment = $repository->findById(5);
// var_dump($Comment);


$Comment = $repository->findAll();
var_dump($Comment);

$connection = null;