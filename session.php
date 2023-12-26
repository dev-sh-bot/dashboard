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
                        <span class="heading">Sessions / SH/pos-01079</span>
                    </div>
                </div>


                <div class="pos-order-wrapper">
                    <div class="row">
                        <div class="col-sm-4"><strong>Opening Date:</strong> 2023-05-20 09:20</div>
                        <div class="col-sm-4"><strong>Closing Date:</strong> 2023-05-20 17:30</div>
                        <div class="col-sm-4"><strong>Point of Sale:</strong> Shop POS1</div>
                    </div>
                </div>

                <div class="invertory-main-subtotal-wrapper">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Orders:</span>
                                <span>150</span>
                            </div>
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Payments:</span>
                                <span>R25415.12</span>
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