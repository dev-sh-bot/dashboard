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
                        <span class="heading">Job Positions </span>
                    </div>
                </div>

                <div class="main-action-btns d-flex align-items-center justify-content-between">
                    <a href="./add-job-position.php" class="main-action-btn-left">Add</a>
                </div>

                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Job Position</th>
                                <th>Company</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>cashier</td>
                                <td>Korea Market</td>
                            </tr>
                            <tr>
                                <td>cashier</td>
                                <td>Gogi</td>
                            </tr>
                            <tr>
                                <td>packer</td>
                                <td>Korea Market</td>
                            </tr>
                            <tr>
                                <td>Kitchen staff</td>
                                <td>Gogi</td>
                            </tr>
                            <tr>
                                <td>chef</td>
                                <td>Gogi</td>
                            </tr>
                            <tr>
                                <td>assistant chef</td>
                                <td>Gogi</td>
                            </tr>
                            <tr>
                                <td>manager chef</td>
                                <td>Gogi</td>
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