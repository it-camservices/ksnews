<?php
    $cate = @$_GET['cate'];
    $page = @$_GET['page'];
?>
<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="./"><i class="fa fa-home"> </i></a></li>
    <?php 
        $menuObj = new Menu();
        $menus = $menuObj->getAll("ORDER BY indexs ASC");
        foreach($menus as $menu):
          if($menuObj->checkSubmenu($menu->id)){
    ?> 
            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-flag-checkered"></i>&nbsp; <?php echo $menu->menu ?><b class="caret"></b></a>
    <?php }else{ ?>
            <li><a href="?active=<?php echo md5($menu->id) ?>&cate=<?php echo $menu->category_id ?>"><i class="fa fa-flag-checkered"></i>&nbsp; <?php echo $menu->menu ?></a>
    <?php } ?>
        <ul class="dropdown-menu">
    <?php  
        $submenuObj = new SubMenu();
        $submenus = $submenuObj->getByMenu($menu->id);
        foreach($submenus as $submenu):
    ?>
          <li><a href="?active=<?php echo md5($menu->category_id) ?>&cate=<?php echo $submenu->category_id; ?>"><i class="fa fa-star"> </i> &nbsp;<?php echo $submenu->submenu; ?></a></li>
    <?php endforeach ?>
        </ul>
      </li>
  <?php endforeach ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ព័ត៌មានផ្សេងៗទៀត <b class="caret"></b></a>
        <ul class="dropdown-menu">
		      <li><a href="#it"><i class="fa fa-desktop"></i> &nbsp;បច្ចេកវិទ្យា</a></li>
          <li><a href="#letter"><i class="fa fa-envelope"></i> &nbsp;លិខិតមិត្តអ្នកអាន</a></li>  
		      <li><a href=""  data-toggle="modal" data-target="#login" ><i class="fa fa-key"></i>&nbsp;Login</a>	</li>	  
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>