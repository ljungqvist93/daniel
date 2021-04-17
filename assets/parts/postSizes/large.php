<div id="large">
	<?php include 'assets/parts/topperM.php'; ?>
	<a href="index.php" class="return">
		<i class="fal fa-arrow-circle-left"></i>
	</a>
	<div id="caruselle">
		<?php foreach ($covers as $cover): ?>
			<div><img src="https://cyberlad.com/engine/image/<?= $cover['imageName']; ?>" alt=""></div>
		<?php endforeach; ?>
	</div>
	<div id="postContent">
		<header id="title_section_tags" class="mt50">
			<h1 id="title"><?= $post['title']; ?></h1>
			<?php if (!empty($post['subtitle'])): ?>
				<div id="subtitle"><?= $post['subtitle']; ?></div>
			<?php endif; ?>
			<div id="section_tags">
				<div id="section">
					Posted 
					<?= human_readable_time_diff($post['created_at']); ?> 
					in 
					<?php if ($post['section'] == 0): ?>
					    Articles
					<?php else: ?>
					    Guides
					<?php endif; ?>
				</div>
				<ul id="tags" class="inline">
				    <?php foreach($tags as $tag): ?>
					<li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
				    <?php endforeach; ?>
				</ul>
			</div>
		</header>
		<?php if ($parent != 0): ?>
			<article id="parent">
				<div class="imgOverlay">
					<picture>
						<img src="<?= $parent['thumbImage']; ?>" alt="">
					</picture>
				</div>
				<header>
					<p>Catch up with an older post about this:</p>
					<h2><?= $parent['title']; ?></h2>
				</header>
			</article>
		<?php endif; ?>
		<section id="body">
				<main id="pText">
					<?= $post['postText']; ?>
				</main>
				<div id="additionals">
					<?php foreach($relatedPosts as $relatedPost): ?>
						<article>
							<a href="">
								<img src="<?= $relatedPost['thumbImage']; ?>" alt="">
								<h4><?= $relatedPost['title']; ?></h4>
							</a>
						</article>
					
					<?php endforeach; ?>
					<?php foreach($unRelatedPosts as $relatedPost): ?>
					<article>
						<a href="">
							<img src="<?= $relatedPost['thumbImage']; ?>" alt="">
							<h4><?= $relatedPost['title']; ?></h4>
						</a>
					</article>
					<?php endforeach; ?>
				</div>
		</section>
		<div id="disqus_thread" class="mt30"></div>
		<script>
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://cyberlad-com.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</div>
