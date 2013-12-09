<?php 
    include_once ("include/header.php");
?>
<?php include_once("include/top-menu.php");  ?>
<div id="wrap">
    <div class="container">
      <div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i><b> ប្រុងប្រយ័ត្ន </b>ចំពោះការកែប្រែរបស់អ្នក ទំព័រនេះអាចគ្រប់លើគេហទំព័រទាំងមូល  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
      <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-md-9">
        <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
          <p class="pull-right visible-xs"><button type="button" class="btn btn-default btn-sm" data-toggle="offcanvas">Menu</button></p>
          <div class="panel-heading">
            <?php 
              if (empty($_GET["page"])){ echo "Welcome USER";}
              elseif ($_GET["page"] ==1) echo "Create Category";
              elseif ($_GET["page"] ==2) echo "Create Menu";
              elseif ($_GET["page"] ==3) echo "Create Article";
              elseif ($_GET["page"] ==4) echo "Create Right Module";
              elseif ($_GET["page"] ==6) echo "Create Other News Bottom";
              elseif ($_GET["page"] ==7) echo "Create Hotnews Alert";
            ?>
          </div>
          <div class="panel-body">
            <?php
              if (empty($_GET["page"])){ include_once("pages/create-user.php"); }
              elseif ($_GET["page"] ==1) include_once("pages/create-category.php");
              elseif ($_GET["page"] ==2) include_once("pages/create-menu.php");
              elseif ($_GET["page"] ==3) include_once("pages/create-article.php");
              elseif ($_GET["page"] ==4) include_once("pages/create-right-module.php");
              elseif ($_GET["page"] ==6) include_once("pages/create-other-news-bottom.php");
              elseif ($_GET["page"] ==7) include_once("pages/create-hotnews-alert.php");
            ?>   
       </div>
       </div>
       </div>
       </div> 
       </div>    
      <?php include_once("include/right-menu.php") ?>
      </div><!--/row-->
    </div><!--/.container-->
    </div>
    <?php include_once("include/footer.php") ?>
    <?php include_once("include/myscript.php") ?>
  </body>
</html>
