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
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Products</span>
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
                                <th>Product Name</th>
                                <th>Barcode</th>
                                <th>Lot Number</th>
                                <th>Cost</th>
                                <th>Price(Shop)</th>
                                <th>Category</th>
                                <th>Company</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./add-product-test.php">Test1</a></td>
                                <td>15642351616</td>
                                <td>2342</td>
                                <td>R12.50</td>
                                <td>R25.99</td>
                                <td>Drinks</td>
                                <td>Korea Market, Gogi Newlands</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./add-product-test.php">Test2</a></td>
                                <td>1564222222</td>
                                <td>2342</td>
                                <td>R12.50</td>
                                <td>R25.99</td>
                                <td>Sause</td>
                                <td>Korea Market</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./add-food-ingrediant.php">Food</a></td>
                                <td>1478523698</td>
                                <td>2342</td>
                                <td>R10</td>
                                <td>R25.99</td>
                                <td>Vegetables</td>
                                <td>Gogi Newlands</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./add-product-pizza.php">Pizza</a></td>
                                <td>1478523698</td>
                                <td>2342</td>
                                <td>R60</td>
                                <td>R120</td>
                                <td>Mains</td>
                                <td>Gogi Newlands</td>
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