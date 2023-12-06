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
                        <span class="heading">Attendance/ Employee1</span>
                    </div>
                </div>


                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Work Hours</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 09:30:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 13:00:52</td>
                                <td>03:30</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
                            </tr>
                            <tr>
                                <td>Employee1</td>
                                <td>08/07/2023 14:00:25</td>
                                <td>08/07/2023 18:12:23</td>
                                <td>04:12</td>
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