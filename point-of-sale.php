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
                        <span class="heading">Point of Sale</span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="#" class="main-action-btn-left">Create</a>

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
                                <th>Stores</th>
                                <th>Point of Sale</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Shop</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS1</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Shop</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS2</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Shop</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS3</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Observatory</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS1</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Observatory</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS2</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Observatory</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS3</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Newlands</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS1</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Newlands</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS2</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">Gogi Newlands</a></td>
                                <td><a href="add-point-of-sale.php" class="w-100 d-block">POS3</a></td>
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