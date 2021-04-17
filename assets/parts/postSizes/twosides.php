<div id="twosides">
	<div id="imageTitledesc">
		<div id="image" class="imgOverlay">
			<picture>
				<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:799px)">
				<source srcset="<?= $post['coverImage']; ?>" media="(min-width:800px)">
				<img src="<?= $post['thumbImage']; ?>">
			</picture>
		</div>
		<img src="<?= $post['thumbImage']; ?>" id="mPic">
		<div id="titledesc">
			<header>
				<div id="sectionTime">
					Posted 
						<?= human_readable_time_diff($post['created_at']); ?> 
					in 
						<?php if ($post['section'] == 0): ?>
						    Articles
						<?php else: ?>
						    Guides
						<?php endif; ?>
				</div>
				<h1><?= $post['title']; ?></h1>
				<ul id="share" class="inline flex-jc">
					<li>
						<a href="" class="facebookShare">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="" class="twitterShare">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="" class="linkedinShare">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
					<li>
						<a href="" class="redditShare">
							<i class="fab fa-reddit"></i>
						</a>
					</li>
				</ul>
			</header>
		</div>
	</div>
	<div id="body">
		<?= $post['postText']; ?>
	</div>
	<?php include 'comments.php'; ?>
</div>