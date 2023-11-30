<div class="sidebar">
    <div class="logo">POS SOFTWARE</div>
    <div class="navigation">
        <nav class="main-menu">
            <ul class="accordion" id="firstLevel">
                <li class="menu-item active">
                    <a href="./">
                        <span class="menu-icon"><img src="./assets/images/icons/Home.png" alt=""></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="inventory.php">
                        <span class="menu-icon"><img src="./assets/images/icons/Inventory.png" alt=""></span>
                        <span>Inventory</span>
                    </a> collapsed
                </li>

                <!-- First Level Item -->
                <li class="accordion-item menu-item">
                    <h2 class="accordion-header" id="firstLevelHeadingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#firstLevelCollapseOne" aria-expanded="true" aria-controls="firstLevelCollapseOne">
                            Operations
                        </button>
                    </h2>
                    <div id="firstLevelCollapseOne" class="accordion-collapse collapse" aria-labelledby="firstLevelHeadingOne" data-bs-parent="#firstLevel">
                        <div class="accordion-body">
                            <ul class="accordion" id="secondLevel">
                                <!-- Second Level Item #1 -->
                                <li class="accordion-item">
                                    <h2 class="accordion-header" id="secondLevelHeadingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secondLevelCollapseOne" aria-expanded="true" aria-controls="secondLevelCollapseOne">
                                            Transfers
                                        </button>
                                    </h2>
                                    <div id="secondLevelCollapseOne" class="accordion-collapse collapse" aria-labelledby="secondLevelHeadingOne" data-bs-parent="#secondLevel">
                                        <div class="accordion-body">
                                            <!-- Third Level Accordion -->
                                            <ul class="accordion" id="thirdLevel">
                                                <!-- Third Level Item #1 -->
                                                <li class="accordion-item">
                                                    <h2 class="accordion-header" id="thirdLevelHeadingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#thirdLevelCollapseOne" aria-expanded="true" aria-controls="thirdLevelCollapseOne">
                                                            Content for Transfers
                                                        </button>
                                                    </h2>
                                                    <div id="thirdLevelCollapseOne" class="accordion-collapse collapse" aria-labelledby="thirdLevelHeadingOne" data-bs-parent="#thirdLevel">
                                                        <div class="accordion-body">
                                                            Content for Transfers
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Third Level Item #2 -->
                                                <li class="accordion-item">
                                                    <h2 class="accordion-header" id="thirdLevelHeadingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#thirdLevelCollapseTwo" aria-expanded="true" aria-controls="thirdLevelCollapseTwo">
                                                            Scrap
                                                        </button>
                                                    </h2>
                                                    <div id="thirdLevelCollapseTwo" class="accordion-collapse collapse" aria-labelledby="thirdLevelHeadingTwo" data-bs-parent="#thirdLevel">
                                                        <div class="accordion-body">
                                                            Content for Scrap
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Third Level Item #3 -->
                                                <li class="accordion-item">
                                                    <h2 class="accordion-header" id="thirdLevelHeadingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#thirdLevelCollapseThree" aria-expanded="true" aria-controls="thirdLevelCollapseThree">
                                                            Run Scheduler
                                                        </button>
                                                    </h2>
                                                    <div id="thirdLevelCollapseThree" class="accordion-collapse collapse" aria-labelledby="thirdLevelHeadingThree" data-bs-parent="#thirdLevel">
                                                        <div class="accordion-body">
                                                            Content for Run Scheduler
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- End of Third Level Accordion -->
                                        </div>
                                    </div>
                                </li>
                                <!-- End of Second Level Item #1 -->
                            </ul>
                            <!-- End of Second Level Accordion -->
                        </div>
                    </div>
                </li>

                <li class="menu-item has-submenu">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/purchase.png" alt=""></span>
                        <span>Purchase</span>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li><a href="./suppliers.php">Suppliers</a></li>
                            <li><a href="./purchase-orders.php">Purchase Orders</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/sale.png" alt=""></span>
                        <span>Sales</span>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li><a href="./customers.php">Customers</a></li>
                            <li><a href="./sale-order.php">Sales Order</a></li>
                            <li><a href="./pricelist.php">Pricelist</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/product.png" alt=""></span>
                        <span>Products</span>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li><a href="./products.php">Products</a></li>
                            <li><a href="#">Lot Number</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/configuration.png" alt=""></span>
                        <span>Configuration</span>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li><a href="./store.php">Store</a></li>
                            <li><a href="./location.php">Location</a></li>
                            <li><a href="./routes.php">Routes</a></li>
                            <li><a href="./operation-type.php">Operation Type</a></li>
                            <li><a href="./product-categories.php">Product Categories</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/pos.png" alt=""></span>
                        <span>Point Of Sale(POS)</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/user.png" alt=""></span>
                        <span>Employees</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="./users.php">
                        <span class="menu-icon"><img src="./assets/images/icons/user-management.png" alt=""></span>
                        <span>User Management</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/calendar.png" alt=""></span>
                        <span>Employees Calendar</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a href="#">
                        <span class="menu-icon"><img src="./assets/images/icons/setting.png" alt=""></span>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>