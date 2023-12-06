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
                        <span class="heading">Attendance</span>
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
                                <td><a href="./employee-attendance.php"><img src="./assets/images/icons/user-profile-icon.png" alt=""></a></td>
                                <td><a href="./employee-attendance.php">Employee1</a></td>
                                <td><a href="./employee-attendance.php">Cashier</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./employee-attendance.php"><img src="./assets/images/icons/user-profile-icon.png" alt=""></a></td>
                                <td><a href="./employee-attendance.php">Name1</a></td>
                                <td><a href="./employee-attendance.php">Cashier</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./employee-attendance.php"><img src="./assets/images/icons/user-profile-icon.png" alt=""></a></td>
                                <td><a href="./employee-attendance.php">Name2</a></td>
                                <td><a href="./employee-attendance.php">Floor Manager</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./employee-attendance.php"><img src="./assets/images/icons/user-profile-icon.png" alt=""></a></td>
                                <td><a href="./employee-attendance.php">Name3</a></td>
                                <td><a href="./employee-attendance.php">Kitchen Staff</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="./employee-attendance.php"><img src="./assets/images/icons/user-profile-icon.png" alt=""></a></td>
                                <td><a href="./employee-attendance.php">Name4</a></td>
                                <td><a href="./employee-attendance.php">Chef</a></td>
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