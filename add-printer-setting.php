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
                        <span class="heading">Printer Setting/ Gogi Observatory/ Bar Printer</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>Used in store</span>
                                <select name="" id="">
                                    <option value="">Gogi Observatory</option>
                                    <option value="">Gogi Newlands</option>
                                </select>
                            </label>
                            <label for="">
                                <span>Printer Name</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>Categories to Print</span>

                                <label for="" class="input-checked">
                                    <input type="checkbox" name="" id="">
                                    <span>BBQ</span>
                                </label>
                                <label for="" class="input-checked">
                                    <input type="checkbox" name="" id="">
                                    <span>Dessert</span>
                                </label>
                                <label for="" class="input-checked">
                                    <input type="checkbox" name="" id="">
                                    <span>Drinks</span>
                                </label>
                                <label for="" class="input-checked">
                                    <input type="checkbox" name="" id="">
                                    <span>Main</span>
                                </label>
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