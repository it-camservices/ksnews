<div class="row">
	<div class="col-sm-12">
		<div class="list-group">
<?php
	$artObj = new Article();
	$articles = $artObj->getAll();
	foreach($articles as $article):
?>
	<a href="#news-one" class="list-group-item ">
		<p class="list-group-item-text"><?php echo $article->title ?>...</p>
	</a>		  		
<?php
	endforeach
?>
		</div>
	</div>
</div>