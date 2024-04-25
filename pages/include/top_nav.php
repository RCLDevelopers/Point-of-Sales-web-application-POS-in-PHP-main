 <?php require_once('functions/product.php')?>
  <?php require_once('functions/notification.php')?>
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell" style="color: red"></i>
          <span class="badge badge-warning navbar-badge"><?php echo countPendingOrders();?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header"> Pending Orders</span>
          <div class="dropdown-divider"></div>
         
          <?php
               $getorderrs=getNotificationPendingOrders();
              if ($getorderrs !=0) {
                $x=0;
                foreach ($getorderrs as $getorderr ) {
                   ?>
            <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa- mr-2"></i> <?php echo $getorderr->title ?> <span style="color: #17A589"></span>
            <span class="float-right text-muted text-sm"></span>
          </a>
                   <?php }
                  }
          ?>
          
        <div class="dropdown-divider"></div>
          <a href="pending_order" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class=" fas fa-bell"></i>
          <span class="badge badge-danger navbar-badge"><?php echo getTotalproductOutOfStock();?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
           <span class="dropdown-item dropdown-header">Product Out of Stock</span>
            
           <?php
               $getMeds=getNotificationproductOutOfStock();
              if ($getMeds !=0) {
                $x=0;
                foreach ($getMeds as $getMed ) {
                   ?>
            <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa- mr-2"></i> <?php echo $getMed->product_name ?> <span style="color: #17A589">(<?php echo $getMed->quantity ?>)</span>
            <span class="float-right text-muted text-sm"></span>
          </a>
                   <?php }
                  }
                
              
          ?>
          <div class="dropdown-divider"></div>
          <a href="product_out_of_stock" class="dropdown-item dropdown-footer">See All Notification</a>
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          
           <div class="user-panel ">
        <div class="image">
          <img src="../dist/img/user_icon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        
      </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Profile</span>
          <div class="dropdown-divider"></div>
          <a href="change_password" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Change Password
            
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="logout" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    </ul>
  </nav>