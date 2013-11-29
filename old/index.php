<?php include_once("myfiles/headerfile.php") ?>
<title>Welcome To KSNEWS - The Breaking News in Cambodia Nation news and International news, Sport news, Traditional News...</title>
<body>
<?php include_once("myfiles/navfile.php") ?>
	<div class="container theme-showcase">
  <?php include_once("myfiles/bannerfile.php") ?>
  <?php include_once("myfiles/hotnewsslide.php") ?> 
	<?php include_once("myfiles/blognewsfile.php") ?>

      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item" >
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>

                    <h3>basic progressbar <button type="button" class="btn btn-primary" id="h-right-basic">start</button></h3>
                    <div class="bs-example h-right-basic">
                        <div class="progress right">
                            <div class="bar" aria-valuetransitiongoal="75"></div>
                        </div>
                        <script type='text/javascript'>
                            $(document).ready(function() {
                                $('#h-right-basic').click(function() {
                                    $('.h-right-basic .bar').progressbar();
                                });
                            });
                        </script>
                    </div>

<?php include_once ("myfiles/footerfile.php") ?>
  </div> <!-- /container -->
<?php include_once ("myfiles/scriptfile.php") ?>

</body></html>