<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Post{
        public $id;
        public $title;
        public $user_id;
        public $description;
    }
    $P1 = new Post();
    $P2 = new Post();

    $postid_1 = $P1->id=1;
    $posttitle_1 = $P1->title="Aku Suka Mie Ayam";
    $postuser_1 = $P1->user_id=10155;
    $postdesc_1 = $P1->description="Makan";

    $postid_2 = $P2->id=2;
    $posttitle_2 = $P2->title="Aku Suka Bermain ROBLOX";
    $postuser_2 = $P2->user_id=10342;
    $postdesc_2 = $P2->description="Game";

    ?>
<h1>ROBLOX</h1>
<hr>
<h2>Post 1</h2>
<p>Post ID :<?php echo $postid_1?></p>
<p>Title :<?php echo $posttitle_1?></p>
<p>ID User:<?php echo $postuser_1?></p>
<p>Description :<?php echo $postdesc_1?></p>
<hr>
<h2>Post 2</h2>
<p>Post ID :<?php echo $postid_2?></p>
<p>Title :<?php echo $posttitle_2?></p>
<p>ID User:<?php echo $postuser_2?></p>
<p>Description :<?php echo $postdesc_2?></p>

</body>
</html>