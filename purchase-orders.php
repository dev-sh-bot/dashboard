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
            <?php include("includes/top-header.php"); ?>

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
                                <td><a href="./purchase-order.php">PO00013</a></td>
                                <td>20/05/2023</td>
                                <td>Bread Maker Company</td>
                                <td>Korea Market</td>
                                <td>Warehouse</td>
                                <td>R25415.58</td>
                                <td>RFQ Sent </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./purchase-order.php">PO00014</a></td>
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