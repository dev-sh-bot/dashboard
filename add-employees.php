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
                        <span class="heading">Add Employees</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Employee Name</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Job Position</span>
                                <select name="" id="">
                                    <option value="">Cashier</option>
                                    <option value="">Packer</option>
                                    <option value="">Kitchen staff</option>
                                    <option value="">Chef</option>
                                    <option value="">Assistant Chef</option>
                                    <option value="">Manager Chef</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Located</span>
                                <select name="" id="">
                                    <option value="">Shop</option>
                                </select>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Mobile Number</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Emergency Number</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>

                </div>
                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Home Address</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Email Address</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>

                </div>
                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>D/Passport Number</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Visa</span>
                                <input type="file" name="" id="apply">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Contract</span>
                                <input type="file" name="" id="apply">
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