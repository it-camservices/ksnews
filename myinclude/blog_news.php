<?php
	if(!isset($cate) && !isset($page)){
	$artObj = new Article();
	$articles = $artObj->home();
	$i = 1;
	$limit = $artObj->countHome();
	foreach($articles as $article):
		if($i%3==1){echo "<div class='row'>";}
?>	
	<div class="col-sm-6 col-md-4 ">
		<div class="thumbnail">
		  <img src="data:image/jpeg;base64, <?php echo base64_encode($article->front_picture); ?>" alt="<?php $article->title ?>" style="height:130px; width:230px">
		  <i style="font-size:10px; color:#ccc;"><i class="fa fa-calendar"></i>  ថ្ងៃទី 07 ខែ 11 ឆ្នាំ 2013 វេលាម៉ោង 09:47 នាទី  </i>
		  <div class="caption">
		   <h4>
		   		<a href="?cate=<?php echo $cate . '&page=' . $article->id ?>">
			   <?php 
			   		$title = $article->title;
					if(strlen($title)>100){
						$title = wordwrap($title, 100);
						$title = explode("\n", $title);
						for($k=0; $k <= 1; $k++){
							if($k!=1){
								echo $title[$k] . "<br />";
							}else{
								echo $title[$k] . "...";
							}
						}
					}else{
						echo $title;
					}
			    ?> 
		   		</a>
		   </h4>
			<p>
				<?php
					$description = $article->description;
					$description = wordwrap($description, 100);
					$description = explode("\n", $description);
					for($k=0; $k <= 5; $k++){
						if($k!=5){
							echo $description[$k] . "<br />";
						}else{
							echo $description[$k];
						}
					}
				?>
			</p>
			<p><a href="/?menu=1&page=<?php echo $article->id ?>" class="btn btn-primary" role="button" data-original-title="ចុចដើម្បីអានបន្តព័ត៌មាននេះ" data-toggle="tooltip" data-placement="top"><i class="fa fa-eye"></i> អានបន្ត...</a></p>
		  </div>
		</div>
	</div>
<?php 		
			if($i%3==0 || $i==$limit){echo '</div>';}
		$i++;  
	endforeach;
	//if($i%3!=1){echo '</div>';}
	}
?>
  
<?php
		if(isset($page)){
			$artObj = new Article();
			$article = $artObj->getById($page);
			echo "<div class=\"caption\">";
			echo "<h4 style='color:red; padding-left:10px;'>".$article->title."</h4>";
			echo "<p style='padding:10px; text-align:justify;'>".$article->description."</p>";
			echo "</div>";
		}elseif(isset($cate)){
			$artObj = new Article();
			$articles = $artObj->getByCategory($cate);
			$i = 1;
			$limit = count($articles);
			if($limit>0){
			foreach($articles as $article):
				if($i%3==1){echo "<div class='row'>";}
?>	
	<div class="col-sm-6 col-md-4 ">
		<div class="thumbnail">
		  <img src="data:image/jpeg;base64, <?php echo base64_encode($article['front_picture']); ?>" alt="<?php $article['title'] ?>" style="height:130px; width:230px">
		  <i style="font-size:10px; color:#ccc;"><i class="fa fa-calendar"></i>  ថ្ងៃទី 07 ខែ 11 ឆ្នាំ 2013 វេលាម៉ោង 09:47 នាទី  </i>
		  <div class="caption">
		   <h4>
		   		<a href="?cate=<?php echo $cate . '&page=' . $article['id'] ?>">
			   <?php 
			   		$title = $article['title'];
					if(strlen($title)>100){
						$title = wordwrap($title, 100);
						$title = explode("\n", $title);
						echo $title[0] . "<br />";
						echo $title[1] . "...";
					}else{
						echo $title;
					}
			    ?> 
		   		</a>
		   </h4>
			<p>
				<?php
					$description = $article['description'];
					$description = wordwrap($description, 100);
					$description = explode("\n", $description);
					for($k=0; $k <= 5; $k++){
						if($k!=5){
							echo $description[$k] . "<br />";
						}else{
							echo $description[$k];
						}
					}
				?>
			</p>
			<p><a href="/?menu=1&page=<?php echo $article['id'] ?>" class="btn btn-primary" role="button" data-original-title="ចុចដើម្បីអានបន្តព័ត៌មាននេះ" data-toggle="tooltip" data-placement="top"><i class="fa fa-eye"></i> អានបន្ត...</a></p>
		  </div>
		</div>
	</div>
<?php 		
			if($i%3==0 || $i==$limit){echo '</div>';}
		$i++;  
	endforeach;
	//if($i%3!=1){echo '</div>';}
	}
	}
?>