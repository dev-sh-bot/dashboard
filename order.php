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
                        <span class="heading">Orders / SH/1-15324</span>
                    </div>
                </div>

                <div class="main-inventory-button d-flex align-items-center">
                    <a href="#" class="">Print</a>
                </div>


                <div class="pos-order-wrapper">
                    <div class="row">
                        <div class="col-sm-4"><strong>Order Ref:</strong> SH/1-15324</div>
                        <div class="col-sm-4"><strong>Date:</strong>  2023-05-21 14:38</div>
                        <div class="col-sm-4"><strong>Payments:</strong> Cash R100</div>
                        <div class="col-sm-4"><strong>Session:</strong>  SH/pos-01080</div>
                        <div class="col-sm-4"><strong>Cashier:</strong> Dolla</div>
                        <div class="col-sm-4"><strong>Card</strong> R55.88</div>
                    </div>
                </div>
             

                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>UoM</th>
                                <th>Unit Price</th>
                                <th>VAT</th>
                                <th>Subtotal ex Vat</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Test product 1</td>
                                <td>12</td>
                                <td>Units</td>
                                <td>R12.99</td>
                                <td>Standard</td>
                                <td>R135.55</td>
                                <td>R155.88</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="invertory-main-subtotal-wrapper">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Vat:</span>
                                <span>R20.33</span>
                            </div>
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Total:</span>
                                <span>R155.88</span>
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