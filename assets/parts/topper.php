<div id="superCoolBackground" 
    style="background-image: url('/assets/media/<?php foreach ($banner as $bann): ?><?= $bann['imgname']; ?><?php endforeach; ?>');">
    <?php foreach ($fonts as $font): ?>
        <link href="https://fonts.googleapis.com/css?family=<?php echo  $font['url']; ?>&display=swap" rel="stylesheet">
        <h1 style="font-family: <?= $font['name']; ?>">CYBERLAD</h1>
    <?php endforeach; ?>
    <?php foreach ($quotes as $q): ?>
        <span class="quote"><?= $q['quote']; ?></span>
    <?php endforeach; ?>
</div>
<nav id="topper">
	<ul class="flex-jc overflow">
        <?php if (!empty($post)): ?>
            <li><a href="index.php">Home</a></li>
        <?php else: ?>
    		<li><a href="about.php">About me</a></li>
        <?php endif; ?>
		<li><a href="">Articles</a></li>
		<li><a href="">Guides</a></li>
		<li>
			<?php if(is_theme('light')): ?>
                <a href="<?= build_theme_link('dark'); ?>" class="<?= is_theme('dark') ? 'themeselected' : '' ?>">
                    <i class="fal fa-moon"></i>
                </a>
            <?php else: ?>
                <a href="<?= build_theme_link('light'); ?>" class="<?= is_theme('light') ? 'themeselected' : '' ?>">
                	<i class="fas fa-moon"></i>
                </a>
            <?php endif; ?>
		</li>
	</ul>
</nav>