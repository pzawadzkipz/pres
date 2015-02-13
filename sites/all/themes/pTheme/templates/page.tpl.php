<?php if ($page['top']): ?>
	<div id="top" class="clearfix">
		<?php print render($page['top']); ?>
	</div> <!-- /#top -->
<?php endif; ?>

<?php if ($page['sidebar']): ?>
	<div id="sidebar" class="clearfix">
		<?php print render($page['sidebar']); ?>
	</div> <!-- /#sidebar -->
<?php endif; ?>


<div id="content" class="clearfix">
	<?php print render($page['content']); ?>
</div> <!-- /#content -->


<?php if ($page['footer']): ?>
	<div id="footer" class="clearfix">
		<?php print render($page['footer']); ?>
	</div> <!-- /#footer -->
<?php endif; ?>

	<div class="ero">
		Eeeerror
	</div>
		<div class="seriousEro">
		Eeeerror
	</div>