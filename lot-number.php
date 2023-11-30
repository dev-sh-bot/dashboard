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

        <main class="main-content">
            <?php include("includes/top-header.php"); ?>

            <section class="inventory-main-wrapper d-flex flex-column">
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Lot Number</span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">

                    <a href="#" class="main-action-btn-left">Add New</a>


                    <span class="product-search-select">
                        <select id="mySelect" style="width: 100%;">
                            <option value="" selected disabled>Choose Product</option>
                            <option value="Option 1">Product 1</option>
                            <option value="Option 2">Product 2</option>
                            <option value="Option 3">Product 3</option>
                            <option value="Option 4">Product 4</option>
                            <option value="Option 5">Product 5</option>
                        </select>
                    </span>


                    <div class="search-box position-relative">
                        <img src="./assets/images/icons/search.png" class="d-block position-absolute" alt="">
                        <input type="text" class="postion-relative" placeholder="Search Products by Product name, bacode">
                    </div>

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
                                <th>Lot Number</th>
                                <th>Created On</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>2024-03-23</td>
                                <td>2023-04-15</td>
                                <td>120</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>2023-09-10</td>
                                <td>2023-03-20</td>
                                <td>240</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>2024-03-25</td>
                                <td>2023-04-10</td>
                                <td>80</td>
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