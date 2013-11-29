<?php
		if(isset($page)){
			$articleObj = new Article();
			$article = $articleObj->getById($page);
			echo "<div class=\"caption\">";
			echo "<h4 style='color:red; padding-left:10px;'>".$article->title."</h4>";
			echo "<p style='padding:10px; text-align:justify;'>".$article->description."</p>";
			echo "</div>";
		}elseif(isset($cate)){
			$articleObj = new Article();
			$articles = $articleObj->getByCategory($cate);
			$i = 1;
			$limit = 2;
			foreach($articles as $article){
				if($i%3==1){echo "<div class='row'>";}
?>	
	<div class="col-sm-6 col-md-4 ">
		<div class="thumbnail">
		  <img data-src="holder.js/230x130" alt="...">
		  <i style="font-size:10px; color:#ccc;"><i class="fa fa-calendar"></i>  ថ្ងៃទី 07 ខែ 11 ឆ្នាំ 2013 វេលាម៉ោង 09:47 នាទី  </i>
		  <div class="caption">
		   	<h4><a href="?cate=<?php echo $cate . '&page=' . $article->id ?>"><?php print(wordwrap(substr($article->title,0,120),50,"\n")).'...' ?> </a></h4>
			<p><?php echo substr($article->description,0,460).'...' ?></p>
			<p><a href="?cate=<?php echo $cate . '&page=' . $article->id ?>" class="btn btn-primary" role="button" data-original-title="ចុចដើម្បីអានបន្តព័ត៌មាននេះ" data-toggle="tooltip" data-placement="top"><i class="fa fa-eye"></i> អានបន្ត...</a></p>
		  </div>
		</div>
	</div>	
<?php          if($i%3==0 || $i==$limit){echo '</div>';}
			$i++;
			}
		}
?>