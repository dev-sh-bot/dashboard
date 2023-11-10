<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Home</title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <div class="dashboard">
        <?php include("includes/sidebar.php"); ?>

        <main class="main-content">
            <header class="top-header d-flex w-100 justify-content-between">
                <div class="d-flex align-items-center alert-wrapper">
                    <div class="toggle-button">
                        <button class="hamburger" id="toggleSidebar">☰</button>
                    </div>

                    <div class="notifications-wrapper">
                        <div class="alert-icon position-relative">
                            <img src="./assets/images/icons/Notification.png" alt="Notifications">
                            <span class="badge d-flex align-items-center justify-content-center">05</span> <!-- Add the badge here -->
                        </div>
                        <!-- <div class="list-dropdown-content">
                     <ul>
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                     </ul>
                  </div> -->
                    </div>
                    <div class="check-list-wrapper">
                        <div class="alert-icon position-relative">
                            <img src="./assets//images//icons/check-list.png" alt="Notifications">
                            <span class="badge d-flex align-items-center justify-content-center">05</span> <!-- Add the badge here -->
                        </div>
                        <!-- <div class="list-dropdown-content">
                     <ul>
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                     </ul>
                  </div> -->
                    </div>


                </div>

                <div class="location-dropdown-wrapper position-relative">
                    <div class="location-icon-wrapper">
                        <img src="./assets//images/icons/location.png" alt="location">
                        <span>Korea Market</span>
                    </div>
                    <div class="location-content-wrapper">
                        <ul class="p-0 m-0">
                            <li><a href="#">Location 1</a></li>
                            <li><a href="#">Location 2</a></li>
                            <li><a href="#">Location 3</a></li>
                        </ul>
                    </div>
                </div>

                <div class="user-dropdown-wrapper">
                    <div class="d-flex align-items-center">
                        <div class="user-info d-flex flex-column align-items-end">
                            <span class="user-name">John Doe</span>
                            <span class="user-role">Admin</span>
                        </div>
                        <div class="user-avatar position-relative">
                            <!-- if Image exist show image -->
                            <!-- <img src="./assets/images/icons/user-profile-icon.png" alt="User Avatar"> -->

                            <!-- else show user name badge -->
                            <span class="user-name-badge d-flex align-items-center justify-content-center">JD</span>


                            <span class="online"></span>
                        </div>
                    </div>
                    <div class="user-dropdown-content-wrapper">
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <section class="inventory-main-wrapper d-flex flex-column">
                <div class="main-select-fields d-flex justify-content-center align-items-center">
                    <select name="" id="">
                        <option value="Operation">Operation</option>
                        <option value="Operation">Operation</option>
                        <option value="Operation">Operation</option>
                    </select>
                    <select name="" id="">
                        <option value="Purchase">Purchase</option>
                    </select>
                    <select name="" id="">
                        <option value="Sales">Sales</option>
                    </select>
                    <select name="" id="">
                        <option value="Products">Products</option>
                    </select>
                    <select name="" id="">
                        <option value="Configuration">Configuration</option>
                    </select>
                </div>


                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Purchase Orders</span>
                    </div>
                    <div class="search-box position-relative">
                        <img src="./assets/images/icons/search.png" class="d-block position-absolute" alt="">
                        <input type="text" class="postion-relative" placeholder="Search Products by Product name, bacode">
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="#" class="main-action-btn-left">Add New</a>

                    <div class="dropdown main-action-btn-right">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>


                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Reference</th>
                                <th>Confirmation Date</th>
                                <th>Supplier</th>
                                <th>Company</th>
                                <th>Deliver to</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>PO00013</td>
                                <td>20/05/2023</td>
                                <td>Bread Maker Company</td>
                                <td>Korea Market</td>
                                <td>Warehouse</td>
                                <td>R25415.58</td>
                                <td>RFQ Sent </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>PO00014</td>
                                <td>20/05/2023</td>
                                <td>Fresh Produce Ptv Ltd</td>
                                <td>Korea Market</td>
                                <td>Shop</td>
                                <td>R25415.58</td>
                                <td style="color: green">Confirmed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>



        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>