<?php
	include 'engine/connect.php';

	$post = 1;

	if (!empty($_GET['slug'])) {

        $slug = $_GET['slug'];

        $post = $db->prepare("SELECT * FROM posts WHERE slug = :slug LIMIT 1");
        $post->execute(['slug' => $slug]);
        $post = $post->fetch(PDO::FETCH_ASSOC);

        $id = $post['id'];

        $pId = $post['parent'];

        $parent = $db->query("SELECT * FROM posts WHERE id = $pId");
        $parent = $parent->fetch(PDO::FETCH_ASSOC);

        $covers = $db->query("
            SELECT postimages.*
            FROM posts
            JOIN postimages
                ON posts.id = postimages.postId
            WHERE posts.id = $id AND cover = 1
        ")->fetchAll(PDO::FETCH_ASSOC);
		
    	$tags = get_post_tags($id, $db);
    	$tagIds = array_map(function($e) { return $e['id']; }, $tags);
    	$relatedPosts = [];
    	$unRelatedPosts = [];
    	$numRelatedPostsWanted = 3;
    	if (count($tagIds) > 0) {
    		$relatedPosts = $db->query("
    			SELECT DISTINCT posts.* FROM posts
    			JOIN post_tag ON posts.id = post_tag.post_id
    			WHERE post_tag.tag_id IN (".implode(',', $tagIds).")
    			AND posts.id != {$id}
			AND published = 1
    			ORDER BY RAND()
    			LIMIT {$numRelatedPostsWanted}
    		")->fetchAll(PDO::FETCH_ASSOC);
    		if (count($relatedPosts) < $numRelatedPostsWanted) {
			$postIdsToIgnore = array_map(function($e) { return $e['id']; }, $relatedPosts);
			$postIdsToIgnore[] = $id;
    			$unRelatedPosts = $db->query("
    				SELECT * FROM posts
    				WHERE posts.id NOT IN (".implode(',', $postIdsToIgnore).")
				AND published = 1
    				ORDER BY RAND()
    				LIMIT ". ($numRelatedPostsWanted - count($relatedPosts)) ."
    			")->fetchAll(PDO::FETCH_ASSOC);
    		}
    	}
    }

    include 'assets/parts/head.php';
    include 'assets/parts/includers.php';
?>
	<body>
        <?php include 'assets/parts/posttypes.php'; ?>
	</body>
<?php include 'assets/parts/bottom.php'; ?>
