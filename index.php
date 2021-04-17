<?php
	include 'assets/parts/head.php';
	include 'engine/connect.php';
	include 'assets/parts/includers.php';
?>
	<body id="startpage">
		<?php include 'assets/parts/topper.php'; ?>
		<ul id="collage" class="flex-jc">
			<?php foreach ($collage as $coll): ?>
				<li class="imgOverlay list_item">
					<a href="post.php?slug=<?= $coll['slug']; ?>"></a>
					<picture>
						<img src="<?= $coll['thumbImage']; ?>">
					</picture>
					<header>
						<h3><?= $coll['title']; ?></h3>
	                    <footer>
	                    	<div class="tags_section overflow">
	                    	    <div class="section">
	                    	        <?php if ($coll['section'] == 0): ?>
	                    	            Article
	                    	        <?php else: ?>
	                    	            Guide
	                    	        <?php endif; ?>
	                    	    </div>
	                    	    <div class="time">
	                    	    	<?= human_readable_time_diff($coll['created_at']); ?>
	                    	    </div>
	                    	</div>
	                    </footer>
						<h3><?= $post['title']; ?></h3>
					</header>
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="latest flex-jc">
			<?php foreach ($posts as $post): ?>
				<article>
					<a href="post.php?slug=<?= $post['slug']; ?>" class="postLink"></a>
					<picture>
						<img src="<?= $post['thumbImage']; ?>">
					</picture>
					<header>
	                    <div id="tags_section_time">
	                    	<div class="tags_section">
	                    	    <div class="section">
	                    	        <?php if ($post['section'] == 0): ?>
	                    	            Article
	                    	        <?php else: ?>
	                    	            Guide
	                    	        <?php endif; ?>
	                    	    </div>
	                    	    <div class="tags">
	                    	        <?php $tags = get_post_tags($post['id'], $db); ?>
	                    	        <ul class="tags inline">
	                    	            <?php foreach($tags as $tag): ?>
	                    	                <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
	                    	            <?php endforeach; ?>
	                    	        </ul>
	                    	    </div>
	                    	    <div class="time">
	                    	    	<?= human_readable_time_diff($post['created_at']); ?>
	                    	    </div>
	                    	</div>
	                    </div>
						<h3><?= $post['title']; ?></h3>
					</header>
				</article>
			<?php endforeach; ?>
		</div>
	</body>
<?php include 'assets/parts/bottom.php'; ?>