<?php
    $subpage = 1;
	include 'connect.php';

    $published = $db->query("
    	SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC
    ")->fetchAll();

    $unpublish = $db->query("
    	SELECT * FROM posts WHERE published = 0 ORDER BY created_at DESC
    ")->fetchAll();

	include '../assets/parts/head.php';
?>
<body id="overview">
	<div class="wrapper">
		<a href="/">startpage</a>
		<a href="create.php">new</a>
		<ul class="block">
			<?php foreach ($unpublish as $publish): ?>
				<li>
					<div class="imgOverlay floatl">
						<picture>
							<a href="edit.php?id=<?= $publish['id']; ?>"></a>
							<img src="<?= $publish['thumbImage']; ?>">
						</picture>
					</div>
					<a href="/post.php?slug=<?= $publish['slug']; ?>" class="title floatl"><?= $publish['title']; ?></a>
					<a href="publish.php?id=<?= $publish['id']; ?>"><i class="fal fa-check-circle floatr"></i></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<h1 class="mt50">Published</h1>
		<ul class="block">
			<?php foreach ($published as $publish): ?>
				<li>
					<div class="imgOverlay floatl">
						<picture>
							<a href="edit.php?id=<?= $publish['id']; ?>"></a>
							<img src="<?= $publish['thumbImage']; ?>">
						</picture>
					</div>
					<a href="/post.php?slug=<?= $publish['slug']; ?>" class="title floatl"><?= $publish['title']; ?></a>
					<a href="publish.php?id=<?= $publish['id']; ?>"><i class="fal fa-times-circle floatr"></i></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</body>
<?php include '../assets/parts/bottom.php'; ?>