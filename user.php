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
                        <span class="heading">User/Chantel Mimi</span>
                    </div>
                </div>

                <div class="main-inventory-button d-flex align-items-center">
                    <button class=" " type="button" data-bs-toggle="modal" data-bs-target="#send-invite">Invite User</button>
                    <button class=" " type="button" data-bs-toggle="modal" data-bs-target="#reset-password">Password Reset</button>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label for="">
                                <span>User Name</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <span>User Email</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="d-flex flex-column col-md-6">
                            <label for="">
                                <div class="w-100">
                                    <label for="" class="input-checked">
                                        <input type="checkbox" name="" id="">
                                        <span>Dashboard</span>
                                    </label>
                                </div>
                                <div class="w-100">
                                    <label for="" class="input-checked">
                                        <input type="checkbox" name="" id="">
                                        <span>Inventory</span>
                                    </label>
                                </div>
                                <div class="w-100">
                                    <label for="" class="input-checked">
                                        <input type="checkbox" name="" id="">
                                        <span>POS</span>
                                    </label>
                                </div>
                                <div class="w-100">
                                    <label for="" class="input-checked">
                                        <input type="checkbox" name="" id="">
                                        <span>Employees</span>
                                    </label>
                                </div>
                                <div class="w-100">
                                    <label for="" class="input-checked">
                                        <input type="checkbox" name="" id="">
                                        <span>Employee Calendar</span>
                                    </label>
                                </div>
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



                <!-- Modal -->
                <div class="modal fade" id="send-invite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content user-modal-content">
                            <div class="user-modal-body">
                                <p class="text-center">
                                    Invitation has been sent to the user on their email.
                                    <br>
                                    User will be able to set their own password and login to the system
                                </p>
                            </div>
                            <div class="user-modal-footer d-flex justify-content-center">
                                <button type="button" class="btn-action" data-bs-dismiss="modal">Okay</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="reset-password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content user-modal-content">
                            <div class="user-modal-body">
                                <p class="text-center">
                                    Instructions to reset their password has been sent to the user’s email.
                                </p>
                            </div>
                            <div class="user-modal-footer d-flex justify-content-center">
                                <button type="button" class="btn-action" data-bs-dismiss="modal">Okay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>