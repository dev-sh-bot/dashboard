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
                        <span class="heading">Point of Sale/Shop POS1</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Category</span>
                                <select name="" id="">
                                    <option value="">Shop</option>
                                    <option value="">Gogi Observatory</option>
                                    <option value="">Gogi Newlands</option>
                                </select>
                            </label>
                            <label for="">
                                <span>Point of Sale Name</span>
                                <input type="text">
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" n class="input-checked"ame="" id="">
                                <span>Restaurant POS?</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Order Printers</span>
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Bar Printer</span>
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Kitchen Kimbap Station</span>
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Kitchen Frying Station</span>
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Kitchen Prep Station</span>
                            </label>
                            <label for="" class="input-checked">
                                <input type="checkbox" name="" id="">
                                <span>Kitchen Stove Station</span>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6">
                          
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Receipt Printer IP</span>
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