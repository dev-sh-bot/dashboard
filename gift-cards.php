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
                        <span class="heading">Gift Card</span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="./add-location.php" class="main-action-btn-left">Add Location</a>

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
                                <th>Location</th>
                                <th>Bar code</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./gift-card.php">Korea Market</a></td>
                                <td><a href="./gift-card.php">KM/Gift-01521</a></td>
                                <td><a href="./gift-card.php">2023-05-20</a></td>
                                <td><a href="./gift-card.php">G12354985</a></td>
                                <td><a href="./gift-card.php">R1000</a></td>
                                <td><a href="./gift-card.php">Issued</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./gift-card.php">Korea Market</a></td>
                                <td><a href="./gift-card.php">KM/Gift-01511</a></td>
                                <td><a href="./gift-card.php">2023-05-20</a></td>
                                <td><a href="./gift-card.php">G12359841</a></td>
                                <td><a href="./gift-card.php">R354.25</a></td>
                                <td><a href="./gift-card.php">Partially Used</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./gift-card.php">Gogi</a></td>
                                <td><a href="./gift-card.php">GO/Gift-00123</a></td>
                                <td><a href="./gift-card.php">2023-05-20</a></td>
                                <td><a href="./gift-card.php">G12651345</a></td>
                                <td><a href="./gift-card.php">R0.00</a></td>
                                <td><a href="./gift-card.php">Used Up</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./gift-card.php">Gogi</a></td>
                                <td><a href="./gift-card.php">KM/Gift-00143</a></td>
                                <td><a href="./gift-card.php">2023-05-20</a></td>
                                <td><a href="./gift-card.php">G13513213</a></td>
                                <td><a href="./gift-card.php">R500.00</a></td>
                                <td><a href="./gift-card.php">Draft</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>