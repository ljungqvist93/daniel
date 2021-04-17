<?php if ($post['size'] == 1): ?>
	<?php include 'postSizes/large.php'; ?>
<?php elseif($post['size'] == 2): ?>
	<?php include 'assets/parts/topperM.php';
		include 'postSizes/small.php'; ?>
<?php elseif($post['size'] == 3): ?>
	<?php include 'postSizes/twosides.php'; ?>
<?php endif; ?>
