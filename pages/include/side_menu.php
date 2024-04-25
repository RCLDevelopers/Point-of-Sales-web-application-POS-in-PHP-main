 <!-- Brand Logo -->
    <a href="index" class="brand-link">
      <img src="../dist/img/logo.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b style="color: #17A589;font-size:12px" id="infoMessage">ALUTA BRAND MEDIA
        
</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user_icon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user_email ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
        
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                POS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_sales" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p style="color: #17A589">Manage Product Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_sales_service" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p style="color: #17A589">Manage Service Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_sale" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Product Sales</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="add_service_sale.php" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Service Sales</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Product & Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="add_product" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="add_service" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="manage_product" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="manage_service" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Services</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_stock" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Stock</p>
                </a>
              </li>
            
            
              <li class="nav-item">
                <a href="product_out_of_stock" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Out of Stock</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="category" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Category
                
              </p>
            </a>
          </li>
           <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_orders" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_order" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add order</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_customers" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_customer" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Customer</p>
                </a>
              </li>
             
            </ul>
          </li>
           <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Suppliers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_suppliers" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p> Manage Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_supplier" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Supplier</p>
                </a>
              </li>
             
            </ul>
          </li>
           <!--<li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Returns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sales_return" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Sales Return</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="purchase_return" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Purchase Return</p>
                </a>
              </li>
             
            </ul>
          </li>-->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_purchase" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Purchases</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_purchase" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Purchase</p>
                </a>
              </li>
             
            </ul>
          </li>
         <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-dollar-sign"></i>

              <p>
                Expenses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_expenses" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Expenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_expenses" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add expenses</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="reports" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_user" class="nav-link " style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Manage Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_user" class="nav-link" style="color: #17A589">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Users</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="role" class="nav-link" style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="privilege" class="nav-link" style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Privilege</p>
                </a>
              </li>
                <!--<li class="nav-item">
                <a href="access_denied" class="nav-link" style="color: #17A589">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>acccess</p>
                </a>
              </li>-->
            </ul>
          </li>
       <li class="nav-item">
            <a href="settings" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Settings
                
              </p>
            </a>
          </li>
        <!--  <li class="nav-item">
            <a href="branch" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Branches
                
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="subscribe" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Subscribe
                
              </p>
            </a>
          </li>-->
        <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>