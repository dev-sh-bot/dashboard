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
                        <option value="Purchase">Purchase</option>
                        <option value="Purchase">Purchase</option>
                    </select>
                    <select name="" id="">
                        <option value="Sales">Sales</option>
                        <option value="Sales">Sales</option>
                        <option value="Sales">Sales</option>
                    </select>
                    <select name="" id="">
                        <option value="Products">Products</option>
                        <option value="Products">Products</option>
                        <option value="Products">Products</option>
                    </select>
                    <select name="" id="">
                        <option value="Configuration">Configuration</option>
                        <option value="Configuration">Configuration</option>
                        <option value="Configuration">Configuration</option>
                    </select>
                </div>


                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Add Operation Type</span>
                    </div>
                </div>


                <div class="inventory-main-input-wrapper">
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Operation Name</span>
                                <input type="text">
                            </label>
                        </div>

                        <div class="two-col">
                            <label for="">
                                <span>Operation Type</span>
                                <select name="" id="">
                                    <option value="">Internal Transfers</option>
                                    <option value="">Internal Transfers</option>
                                </select>
                            </label>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Store</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Code</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>

                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Default Source Location</span>
                                <select name="" id="">
                                    <option value="">WH</option>
                                    <option value="">WH</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Default Destination Location</span>
                                <select name="" id="">
                                    <option value="">WH</option>
                                    <option value="">WH</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="perform-action-btn d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="discard-btn">Discard</a>
                        <a href="#" class="save-btn">Save</a>
                    </div>
                </div>



            </section>



        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>