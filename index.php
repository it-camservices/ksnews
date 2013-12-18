<?php include_once("myinclude/head.php"); ?>
<?php //include_once("myinclude/popup_full_screen.php"); ?>
</head>
	<body>
	<div id="displaybox" style="display: none;"></div>
		<?php include_once("myinclude/nav.php"); ?>
		<?php include_once("myinclude/banner.php"); ?>
		<div id="wrap">
			<div class="container tooltip-demo">
				<?php include_once("myinclude/top_alert.php"); ?>
				<div class="row">		
					<div class="col-sm-8">
						<div class="panel panel-primary">
						  <div class="panel-heading"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;ព័ត៌មានថ្មីៗ</div>
							<div class="panel-body">	
								<?php include_once("myinclude/breadcrumb.php"); ?>
								<?php include_once("myinclude/blog_news.php"); ?>
								<?php include_once("myinclude/include_news.php"); ?> 							
							</div>
						</div>				
						<?php include_once("myinclude/other_news.php"); ?>				
					</div>           
					<div class="col-sm-4">
						<?php include_once("myinclude/right_panel.php"); ?>
						<?php include_once("myinclude/right_counter.php"); ?>
					</div>
				</div>
			</div>
		</div>
		<?php include_once("myinclude/footer_all_in_one.php"); ?>
	</body>
</html>
