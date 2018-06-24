<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#">
                    <i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if ($activeAside == 1) {echo 'active';} ?> treeview">
                <a href="cat_list.php">
                    <i class="fa fa-files-o"></i>
                    <span>Categories</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="cat_list.php">
                            <i class="fa fa-circle-o"></i> Categories List</a>
                    </li>
                </ul>
            </li>
            <li class="<?php if ($activeAside == 2) {echo 'active';} ?> treeview">
                <a href="product_list.php">
                    <i class="fa fa-files-o"></i>
                    <span>Products</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="product_list.php">
                            <i class="fa fa-circle-o"></i> Products List</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>