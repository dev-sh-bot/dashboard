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
                        <span class="heading">Employees</span>
                    </div>

                    <div class="search-box position-relative">
                        <button class="search-btn d-block position-absolute"><img src="./assets/images/icons/search.png" alt=""></button>
                        <input type="text" class="postion-relative" placeholder="Search Products by Product name, bacode">
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="./add-employees.php" class="main-action-btn-left">Add New</a>

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
                                <th>Profile</th>
                                <th>Employee Name</th>
                                <th>Job Positions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><img src="./assets/images/icons/user-profile-icon.png" alt=""></td>
                                <td>Employee1</td>
                                <td>Cashier</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><img src="./assets/images/icons/user-profile-icon.png" alt=""></td>
                                <td>Name1</td>
                                <td>Cashier</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><img src="./assets/images/icons/user-profile-icon.png" alt=""></td>
                                <td>Name2</td>
                                <td>Floor Manager</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><img src="./assets/images/icons/user-profile-icon.png" alt=""></td>
                                <td>Name3</td>
                                <td>Kitchen Staff</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><img src="./assets/images/icons/user-profile-icon.png" alt=""></td>
                                <td>Name4</td>
                                <td>Chef</td>
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