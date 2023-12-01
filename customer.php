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

            <section class="inventory-main-wrapper d-flex flex-column">
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Customer / Pick & Pay pielands</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Total Sales (in R)</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Average Per Month (in R)</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="two-col d-flex two-col-radio justify-content-start">
                            <label for="" class="d-flex align-items-center ">
                                <input type="radio" name="type">
                                <span>Individual</span>
                            </label>
                            <label for="" class="d-flex align-items-center ">
                                <input type="radio" name="type">
                                <span>Company</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Customer Name</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Mobile Number</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Address</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Email Address</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>VAT</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Phone Number</span>
                                <input type="text">
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