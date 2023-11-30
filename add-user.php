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
                        <span class="heading">Add User</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Name</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Email</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Phone</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Position</span>
                                <select name="" id="">
                                    <option value="">Manager</option>
                                    <option value="">Employees</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perform-action-btn d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="discard-btn">Discard</a>
                        <a href="#" class="save-btn">Save</a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>