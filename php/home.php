<?php foreach ($content as $page): ?>

  <!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	  <!-- Title -->
		<a href="<?php echo $page->permalink(); ?>">
			<h1 class="title text-uppercase"><?php echo $page->title(); ?></h1>
		</a>

		<div id="page-content">
		<!-- Breaked content -->
		<?php echo $page->contentBreak(); ?>

		<!-- "Read more" button -->
		<?php if ($page->readMore()): ?>
			<a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
		<?php endif ?>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>

<hr>
<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul class="pagination flex-wrap">

		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
		<li class="page-item mr-2">
			<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
		</li>
		<?php endif; ?>

		<!-- Home button -->
		<li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
			<a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a>
		</li>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
		<li class="page-item ml-2">
			<a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
		</li>
		<?php endif; ?>

	</ul>
</nav>
<?php endif ?>

<?php if (!$url->notFound()): ?>
<div class="text-right mt-5">
	<a class="btn btn-primary" target="_blank" href="<?php echo $GITHUB_BASE_URL.$page->key().'/'.$FILENAME ?>"><?php echo $language->get('Collaborate with us and edit this page'); ?></a>
</div>
<?php endif ?>
