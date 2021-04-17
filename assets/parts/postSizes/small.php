<div id="small">
	<div id="mobile">
		<picture>
			<img src="<?= $post['thumbImage']; ?>" alt="">
		</picture>
		<header>
			<div class="wrapper-standard">
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
			</div>
		</header>
	</div>
	<div id="desktop">
		<header id="smallHead">
			<h1><?= $post['title']; ?></h1>
			<div id="section_time_share" class="mt15 overflow">
				<div id="sectionTime" class="floatl">
					Posted 
						<?= human_readable_time_diff($post['created_at']); ?> 
					in 
						<?php if ($post['section'] == 0): ?>
						    Articles
						<?php else: ?>
						    Guides
						<?php endif; ?>
				</div>
				<ul id="share" class="inline floatr">
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
			</div>
		</header>
		<picture>
			<img src="<?= $post['coverImage']; ?>" alt="">
		</picture>
	</div>
	<main id="body">
		<?= $post['postText']; ?>
	</main>
	<?php include 'comments.php'; ?>          
</div>