
<div class="row">
  	<div class="col-sm-12">
		<form class="form-horizontal" role="form" action="/admin/index.php?page=3&action=save" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php if(isset($data->id)) echo $data->id?>" />
			<div class="well well-sm">
				<div class="form-group">
			    	<label class="col-sm-3 control-label" for="article-name">Article's Name</label>
			    	<div class="col-sm-9"><input value="<?php if(isset($data->title)) echo $data->title ?>" id="article-name" name="title" class="form-control" type="text" placeholder="Article's Name" required></div>
			  	</div>
			  	<div class="form-group">
			    	<label class="col-sm-3 control-label" for="address">News's Address</label>
			    	<div class="col-sm-9"><input value="<?php if(isset($data->address)) echo $data->address ?>" id="address" name="address" class="form-control" type="text" placeholder="News's Address" required></div>
			  	</div>
			  	<div class="form-group">
			    	<label class="col-sm-3 control-label" for="Author">Author</label>
			    	<div class="col-sm-9"><input value="<?php if(isset($data->author)) echo $data->author ?>" id="Author" name="author" class="form-control" type="text" placeholder="Author's Name" required></div>
			  	</div>
                   
                <div class="form-group">
                <label class="col-sm-3 control-label" for="date">Public Date</label>
                <div class="col-sm-9">
                    <div class="input-group date" id="datetimepicker1">
                     <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                     <input value="<?php if(isset($data->modify_date)) echo $data->modify_date ?>" name="publishDate" id="date" class="form-control" type="datetime" data-format="dddd DD-MM-YYYY hh:mm A" placeholder="dddd DD-MM-YYYY hh:mm AM/PM" required>
                    </div>
                </div>
                </div>                
	            <script type="text/javascript">
	                $(function () {
	                    $('#datetimepicker1').datetimepicker();
	                });
	            </script>

	            <div class="form-group">
            			<label class="col-sm-3 control-label" for="description">Select Categories</label>
            			<div class="col-sm-9">					
            			<div class="btn-group">
						<select id="multi-cate" multiple="multiple" name="category[]" size="1">
							 <?php 
				            	$cateObj = new Category();
				             	$categories = $cateObj->getAll();
				              	foreach($categories as $category):
				            ?>
				        		<option value="<?php echo $category->id ?>"
				        		<?php
				        		if(isset($data->category_id)){
					        		$categories_id = explode(',', $data->category_id);
					        		foreach($categories_id as $category_id):
					        			if($category->id == $category_id)
					        				echo " selected ";
					        		endforeach;
					        	}
				        		?>
				        		>
				        			<?php  echo $category->category ?>
				        		</option>
				        	<?php  endforeach; ?>
						</select>
						<button id="multi-toggle" class="btn btn-primary">Select All</button>
					</div>
					</div>
      			</div>
		     	<div class="form-group">
            			<label class="col-sm-3 control-label" for="description">Description</label>
            			<div class="col-sm-9"><textarea class="ckeditor" name="description" id="description"><?php if(isset($data->description)) echo $data->description ?></textarea></div>
      			</div>
      			<div class="form-group">
            			<label class="col-sm-3 control-label" for="description">Front Images</label>
            	<div class="col-sm-9">			
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-primary btn-file">
							<i class="fa fa-picture-o"></i> <input type="file" multiple name="frontImage" />
						</span>
					</span>
					<input type="text" name="f-img" id="f-img" class="form-control" readonly>
				</div>
				
				<span class="help-block">
					Try selecting one or more files and watch the feedback
				</span>
				</div>
      			</div>
      			<div class="form-group">
		            <label class="col-sm-3 control-label" for="description">Post</label>
		            <div class="col-sm-9">   
		           		<div class="btn-group" data-toggle="buttons">
		          			<label class="btn btn-default <?php if((isset($data->frontpage) && $data->frontpage==0) OR !isset($data->frontpage)) echo ' active' ?>">
		              		<input type="radio" name="frontpage" id="inputWalls" value="0" <?php if((isset($data->frontpage) && $data->frontpage==0) OR !isset($data->frontpage)) echo " checked" ?>> Front Page (No) </label>
		          			<label class="btn btn-default <?php if(isset($data->frontpage) && $data->frontpage==1) echo ' active' ?>">
		              		<input type="radio" name="frontpage" id="inputWalls" value="1" <?php if(isset($data->frontpage) && $data->frontpage==1) echo " checked" ?>> Front Page (Yes) </label>
		      			</div>
		      			<div class="btn-group" data-toggle="buttons">
		          			<label class="btn btn-default <?php if((isset($data->published) && $data->published==0) OR !isset($data->published)) echo ' active' ?>">
		              		<input type="radio" name="publish" id="inputWalls" value="0" <?php if((isset($data->published) && $data->published==0) OR !isset($data->published)) echo " checked" ?>> Unpublish </label>
		          			<label class="btn btn-default <?php if(isset($data->published) && $data->published==1) echo ' active' ?>" >
		              		<input type="radio" name="publish" id="inputWalls" value="1" <?php if(isset($data->published) && $data->published==1) echo " checked" ?>> Publish </label>
		      			</div>
		     		</div>
		    	</div>
      			<div class="well well-sm">
      			<div class="panel-group" id="accordion">
				  <div class="panel panel-warning">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						  Other Image and File
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
					  <div class="panel-body">
					    <div class="well well-sm">
						  	<ul class="nav nav-pills nav-justified">
							  <li class="active"><a href="#images" data-toggle="tab"> Images <span class="badge pull-right">10</span></a></li>
							  <li><a href="#video" data-toggle="tab"> Video <span class="badge pull-right">10</span></a></li>
							</ul> 
						</div> 
						<div id="myTabContent" class="tab-content">
  							<div class="tab-pane fade active in" id="images">
	  							<div class="well well-sm">
	  								<div class="row">
		  							<div class="col-sm-6">

								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img1" multiple>
												</span>
											</span>
											<input type="text" name="f-img1" id="f-img" class="form-control" readonly placeholder="image 1">
										</div>
										<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img2" multiple>
												</span>
											</span>
											<input type="text" name="f-img2" id="f-img" class="form-control" readonly placeholder="image 2">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img3" multiple>
												</span>
											</span>
											<input type="text" name="f-img3" id="f-img" class="form-control" readonly placeholder="image 3">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img4" multiple>
												</span>
											</span>
											<input type="text" name="f-img4" id="f-img" class="form-control" readonly placeholder="image 4">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img5" multiple>
												</span>
											</span>
											<input type="text" name="f-img5" id="f-img" class="form-control" readonly placeholder="image 5">
										</div>

		  							</div>
		  							<div class="col-sm-6">

								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img6" multiple>
												</span>
											</span>
											<input type="text" name="f-img6" id="f-img" class="form-control" readonly placeholder="image 6">
										</div>
										<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img7" multiple>
												</span>
											</span>
											<input type="text" name="f-img7" id="f-img" class="form-control" readonly placeholder="image 7">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img8" multiple>
												</span>
											</span>
											<input type="text" name="f-img8" id="f-img" class="form-control" readonly placeholder="image 8">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img9" multiple>
												</span>
											</span>
											<input type="text" name="f-img9" id="f-img" class="form-control" readonly placeholder="image 9">
										</div>
<br>
								  		<div class="input-group">
											<span class="input-group-btn">
												<span class="btn btn-primary btn-file">
													<i class="fa fa-picture-o"></i> <input type="file" name="f-img10" multiple>
												</span>
											</span>
											<input type="text" name="f-img10" id="f-img" class="form-control" readonly placeholder="image 10">
										</div>
		  							</div>
		  							</div>
	  							</div>
  							</div>
  							<div class="tab-pane fade" id="video">
	  							<div class="well well-sm">
	  								<div class="row">
	  									<div class="class="col-sm-12"">
		  								<div class="col-sm-6">
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 1"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 2"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 3"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 4"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 5">
		  								</div>
		  								<div class="col-sm-6">
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 6"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 7"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 8"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 9"><br/>
									    	<input id="video1" name="video1" class="form-control" type="url" placeholder="Video 10">
		  								</div>
		  								</div>
	  								</div>
	  							</div>
  							</div>
  						</div>
  						</div>
  						
					</div>
				  </div>
				</div>
				</div>

      		<div class="form-group">
	            <div class="col-sm-3"></div>
	            <div class="col-sm-9">
	              <button class="btn btn-primary" type="submit" name="saveArticle"><i class="fa fa-check-square"></i> &nbsp;Save</button>
	              <button class="btn btn-default" type="reset"><i class="fa fa-refresh"></i> &nbsp; Reset</button>
	            </div>
          	</div>  
			</div>
		</form>
	</div>
</div>

<div class="row">
  <div class="col-sm-12">
<form action="/admin/index.php?page=3&action=edit" method="post">
<div id="main">
	<div class="row">
		<div class="bootstrap_buttons well well-sm">
			<button type="reset" class="reset btn btn-primary" data-column="0" data-filter=""><i class="icon-white icon-refresh glyphicon glyphicon-refresh"></i> Reset filters</button>
			<button type="submit" class="btn btn-success" name="publishArticle"><i class="fa fa-check-square"></i> Publish</button>
			<button type="submit" class="btn btn-warning" name="unpublishArticle"><i class="fa fa-exclamation-triangle"></i> UnPublish</button>
			<button type="submit" class="btn btn-info" name="editArticle"><i class="fa fa-pencil-square"></i> Edit</button>
			<button type="submit" class="btn btn-danger" name="deleteAritcle" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-times"></i> Delete</button>
		</div>
	</div>
	<div id="demo">
	  <div class="row">
    <div class="table-responsive">
	<table class="tablesorter">
	<thead>
		<tr>
			<th>Title</th>
			<th class="filter-select filter-exact" data-placeholder="published">Published</th>
			<th class="filter-select filter-exact" data-placeholder="frontpage">Front Page</th>
			<th>Category</th>
			<th>Create Date</th>
			<th>Front Picture</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Title</th>
			<th>Published</th>
			<th>Front Page</th>
			<th>Category</th>
			<th>Create Date</th>
			<th>Front Picture</th>
		</tr>
		<tr>
			<th colspan="9" class="ts-pager form-horizontal">
				<button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
				<button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
				<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
				<button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
				<button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
				<select class="pagesize input-mini" title="Select page size">
					<option selected="selected" value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
					<option value="<?php $artObj = new Article(); echo $artObj->getCount() ?>">All</option>
				</select>
				<select class="pagenum input-mini" title="Select page number"></select>
			</th>
		</tr>
	</tfoot>
	<tbody>
		<?php 
			$artObj = new Article();
			$articles = $artObj->getAllArticle();
			if($articles>0){
			foreach($articles as $article):
		?>
			<tr>
				<td width="350"><input type="checkbox" value="<?php echo $article['id'] ?>" name="articleId[]">&nbsp; <a href="/admin?page=3&action=edit&id=<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a></a></td>
				<td><?php echo $article['publish'] ?></td><td><?php echo $article['front'] ?></td>
				<td>
					<?php 
						$categories_id = explode(',', $article['category_id']);
						foreach($categories_id as $category_id):
							echo $artObj->getCategoryName($category_id) . "<br />";
						endforeach;
					?>
				</td>
				<td><?php echo $article['modify_date'] ?></td>
				<td><img src='data:image/jpeg;base64, <?php echo base64_encode($article["front_picture"]) ?> 'width="240" height="100"/></td>
			</tr>
		<?php
			endforeach ;
			}
		?>
	</tbody>
</table></div>
</div>
</div>
</div>
</form>
</div>
</div>

