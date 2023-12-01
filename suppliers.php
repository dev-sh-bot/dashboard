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

            <section class="inventory-main-wrapper d-flex flex-column">
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Suppliers</span>
                    </div>
                    <div class="search-box position-relative">
                        <img src="./assets/images/icons/search.png" class="d-block position-absolute" alt="">
                        <input type="text" class="postion-relative" placeholder="Search Products by Product name, bacode">
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="./add-supplier.php" class="main-action-btn-left">Add Suppliers</a>

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
                                <th>Name</th>
                                <th>VAT</th>
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>LeadTiome</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Bread maker...</td>
                                <td>4851651321</td>
                                <td>0215468512</td>
                                <td>082333666</td>
                                <td>test@asdasdasd.com</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>Fresh produce</td>
                                <td>4854445555</td>
                                <td>0215463512</td>
                                <td>082333666</td>
                                <td>test@asdasd.com</td>
                                <td>2</td>
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