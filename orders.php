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
                        <span class="heading">Orders</span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">

                    <input type="text" name="dates" value="01/01/2018 - 01/15/2018" />

                    <select name="" id="">
                        <option value="">Shop</option>
                    </select>
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
                                <th>Order Number</th>
                                <th>Session</th>
                                <th>Date</th>
                                <th>Employee</th>
                                <th>Type</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./order.php" class="w-100 d-block">SH/1-1532</a></td>
                                <td><a href="./order.php" class="w-100 d-block">SH/pos-01080</a></td>
                                <td><a href="./order.php" class="w-100 d-block">2023-05-21 16:38</a></td>
                                <td><a href="./order.php" class="w-100 d-block">Dolla</a></td>
                                <td><a href="./order.php" class="w-100 d-block">Sale</a></td>
                                <td><a href="./order.php" class="w-100 d-block">-R487.68</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./order.php" class="w-100 d-block">SH/2-00154</a></td>
                                <td><a href="./order.php" class="w-100 d-block">SH/pos-01080</a></td>
                                <td><a href="./order.php" class="w-100 d-block">2023-05-21 16:38</a></td>
                                <td><a href="./order.php" class="w-100 d-block">Dolla</a></td>
                                <td><a href="./order.php" class="w-100 d-block">Refund</a></td>
                                <td><a href="./order.php" class="w-100 d-block">R1425.6</a></td>
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