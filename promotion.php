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

        <main class="main-wrapper">
            <?php include("includes/top-header.php"); ?>

            <section class="main-content-wrapper d-flex flex-column">
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Promotion/ Buy3Get2Free</span>
                    </div>
                </div>

                <div class="main-inventory-button d-flex align-items-center">
                    <a href="#" class="">Activate</a>
                </div>



                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Promo Name</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Available at</span>
                                <select name="" id="">
                                    <option value="">Shop</option>
                                    <option value="">Shop</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>From Date</span>
                                <input type="date" value="05-20-2023">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>To Date</span>
                                <input type="date" value="05-23-2023">
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Promo Type</span>
                                <select name="" id="">
                                    <option value="">BuyXGetYFree</option>
                                    <option value="">BuyXGetYFree</option>
                                </select>
                            </label>
                        </div>
                    </div>



                    <!-- For Buy3Get2Free -->

                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Buy Products</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <input type="text" placeholder="Add Product">
                                    </label>
                                </div>

                                <div class="inventory-product-list">
                                    <ul>
                                        <li>Test product 1</li>
                                        <li>Test product 2</li>
                                        <li>Test product 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Free Products</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <input type="text" placeholder="Add Product">
                                    </label>
                                </div>

                                <div class="inventory-product-list">
                                    <ul>
                                        <li>Test product 1</li>
                                        <li>Test product 2</li>
                                        <li>Test product 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- For Buy5GetR20off -->



                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Discount Amount:</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Buy Products</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <input type="text" placeholder="Add Product">
                                    </label>
                                </div>

                                <div class="inventory-product-list">
                                    <ul>
                                        <li>Test product 1</li>
                                        <li>Test product 2</li>
                                        <li>Test product 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- For Buy3ForR100 -->
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Fixed Amount:</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Buy Products</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <input type="text" placeholder="Add Product">
                                    </label>
                                </div>

                                <div class="inventory-product-list">
                                    <ul>
                                        <li>Test product 1</li>
                                        <li>Test product 2</li>
                                        <li>Test product 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>



            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>