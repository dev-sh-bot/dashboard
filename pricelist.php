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
                        <span class="heading">Pricelist</span>
                    </div>
                    <div class="search-box position-relative">
                        <button class="search-btn d-block position-absolute"><img src="./assets/images/icons/search.png" alt=""></button>
                        <input type="text" class="postion-relative" placeholder="Search Products by Product name, bacode">
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="#" class="main-action-btn-left">Add New</a>

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
                                <th>Price List</th>
                                <th>Used For</th>
                                <th>Company</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Public Pricelist</td>
                                <td>Shop Prices</td>
                                <td>Korea Market</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Pick & Pay Pricelist</td>
                                <td>Whole Prices</td>
                                <td>Korea Market</td>
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