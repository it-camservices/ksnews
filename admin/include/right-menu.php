<div class="col-md-3 sidebar-offcanvas" id="sidebar" role="navigation" >
  <div class="list-group">
    <a href="./" class="list-group-item <?php if (empty($_GET["page"])) echo "active"; ?> " >Welcome <i>User Name</i><span class="badge pull-right">4</span></a>
    <a href="?page=1&action=new" class="list-group-item <?php if  (isset($_GET["page"]) and ($_GET["page"]==1)) echo "active"; ?>"><span class="badge pull-right">17</span>Create Category</a>
    <a href="?page=2&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==2))  echo "active"; ?> "><span class="badge pull-right">17</span>Create Menu</a>
    <a href="?page=3&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==3))  echo "active"; ?> "><span class="badge pull-right"><?php $artObj = new Article(); echo $artObj->getCount() ?></span>Create Article</a>
    <a href="?page=4&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==4))  echo "active"; ?> "><span class="badge pull-right">10</span>Create Right Modul</a>
    <a href="?page=5&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==5))  echo "active"; ?> "><span class="badge pull-right">7</span>Create Buttom Modul</a>
    <a href="?page=6&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==6))  echo "active"; ?> "><span class="badge pull-right">15</span>Other News Buttom</a>
    <a href="?page=7&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==7))  echo "active"; ?> "><span class="badge pull-right">16</span>Hotnews Alert</a>
    <a href="?page=8&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==8))  echo "active"; ?> "><span class="badge pull-right">1</span>Limit Control</a>
    <a href="?page=9&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==9))  echo "active"; ?> "><span class="badge pull-right">132</span>Music Gallery</a>
    <a href="?page=10&action=new" class="list-group-item <?php if (isset($_GET["page"]) and ($_GET["page"]==10))  echo "active"; ?> "><span class="badge pull-right">1</span>Video Gallery</a>
  </div>
</div>