 <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['root'] ?>plugins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
      
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>User/index.php"><i class="fa fa-circle-o"></i> List Users</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>User/create.php"><i class="fa fa-circle-o"></i> Create User</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Tour/index.php"><i class="fa fa-circle-o"></i> List Tour</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>Tour/create.php"><i class="fa fa-circle-o"></i> Create Tour</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Address</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Address/index.php"><i class="fa fa-circle-o"></i> List Address</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>Address/create.php"><i class="fa fa-circle-o"></i> Create Address</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Type/index.php"><i class="fa fa-circle-o"></i> List Type</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>Type/create.php"><i class="fa fa-circle-o"></i> Create Type</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hotel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Hotel/index.php"><i class="fa fa-circle-o"></i> List Hotel</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>Hotel/create.php"><i class="fa fa-circle-o"></i> Create Hotel</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Price</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Price/index.php"><i class="fa fa-circle-o"></i> List Price</a></li>
            <li><a href="<?php echo $_SESSION['root'] ?>Price/create.php"><i class="fa fa-circle-o"></i> Create Price</a></li>
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>Customer/index.php"><i class="fa fa-circle-o"></i> List Customer</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Register Tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $_SESSION['root'] ?>DangKy/index.php"><i class="fa fa-circle-o"></i> List Register Tour</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>