  <aside class="main-sidebar">
     <!--sidebar: style can be found in sidebar.less--> 
    <section class="sidebar">
       <!--Sidebar user panel--> 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       <!--sidebar menu: : style can be found in sidebar.less--> 
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manage Complaint</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Not Process Yet Complaint</a></li>-->
            <?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?><li><a href="notprocess-complaint.php"><i class="fa fa-circle-o"></i>Not Process Yet Complaint
        <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b></a></li>
<!--<b class="label orange pull-right"><?php // echo htmlentities($num1); ?></b>-->
	<?php } ?>
            <!--<li><a href="index2.html"><i class="fa fa-circle-o"></i>Pending Complaint</a></li>-->
            <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><li><a href="inprocess-complaint.php"><i class="fa fa-circle-o"></i>Pending Complaint
                    <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b></a></li>
            
<?php } ?>
<!--            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Closed Complaints</a></li>-->
            <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
<li><a href="closed-complaint.php"><i class="fa fa-circle-o"></i>Closed Complaints
                        <b class="label green pull-right"><?php echo htmlentities($num1); ?></b></a></li>
                    
<?php } ?>
          </ul>
        </li>
        <li>
          <a href="manage-users.php">
            <i class="fa fa-dashboard"></i> <span>Manage users</span>
          </a>
        </li>
        <li>
          <a href="category.php">
            <i class="fa fa-user-o"></i> <span>Add Category</span>
          </a>
        </li>
        <li>
          <a href="subcategory.php">
            <i class="fa fa-product-hunt"></i> <span>Add Sub-Category</span>
          </a>
        </li>
        <li>
          <a href="state.php">
            <i class="fa fa-product-hunt"></i> <span>Add State</span>
          </a>
        </li>
<li>
          <a href="user-logs.php">
            <i class="fa fa-product-hunt"></i> <span>User Login Log </span>
          </a>
        </li>
<li>
          <a href="logout.php">
            <i class="fa fa-product-hunt"></i> <span>Logout</span>
          </a>
        </li>
<!--<li>
          <a href="?product">
            <i class="fa fa-product-hunt"></i> <span>Add Sub-Category</span>
          </a>
        </li>-->
        
      </ul>
    </section>
<!--     /.sidebar -->
  </aside>


















<!--<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage Complaint
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint
											<?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											Pending Complaint
                   <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php // echo htmlentities($num1); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="closed-complaint.php">
											<i class="icon-inbox"></i>
											Closed Complaints
	     <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php // echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Category </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Add Sub-Category </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>Add State</a></li>
                          
                        
                            </ul>/.widget-nav

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div>/.sidebar
				</div>/.span3-->
