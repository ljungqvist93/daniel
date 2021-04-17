<?php



    $collage = $db->query("
        SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC LIMIT 3
    ")->fetchAll(PDO::FETCH_ASSOC);
    $posts = $db->query("
        SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC LIMIT 3, 10
    ")->fetchAll(PDO::FETCH_ASSOC);

    $fonts = $db->query(
        "SELECT * FROM topfonts ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $quotes = $db->query(
        "SELECT * FROM quotes ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $banner = $db->query(
        "SELECT * FROM bannerimg ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

?>