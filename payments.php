<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Home</title>
    <?php include("includes/style.php"); ?>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                        <span class="heading">Payments</span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">

                    <input type="text" name="dates" value="05/20/2023 - 06/13/2023" />

                    <select name="" id="" class="main-action-btn-right">
                        <option value="">Shop</option>
                    </select>
                </div>

                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Payment Method</th>
                                <th>Payment Transactions</th>
                                <th>Payment Amount</th>
                                <th>Refund Transactions</th>
                                <th>Refund Amount</th>
                                <th>Net Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Cash</td>
                                <td>1532</td>
                                <td>R123456.50</td>
                                <td>20</td>
                                <td>R2000.00</td>
                                <td>R234567.98</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Card</td>
                                <td>2451</td>
                                <td>R234567.98</td>
                                <td>0</td>
                                <td>R2000.00</td>
                                <td>R121456.50</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Uber</td>
                                <td>123</td>
                                <td>R12345.52</td>
                                <td>0</td>
                                <td>R2000.00</td>
                                <td>R12345.52</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>EFT</td>
                                <td>35</td>
                                <td>R1234.52</td>
                                <td>0</td>
                                <td>R2000.00</td>
                                <td>R1234.52</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Service</td>
                                <td>12</td>
                                <td>R1352.25</td>
                                <td>0</td>
                                <td>R2000.00</td>
                                <td>R1352.25</td>
                            </tr>
                           
                           
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
    <script>
        $('input[name="dates"]').daterangepicker();
    </script>
</body>

</html>