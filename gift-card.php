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
                        <span class="heading">Gift Card/ KM/Gift-01521</span>
                    </div>
                </div>

                <div class="main-inventory-button d-flex align-items-center">
                    <a href="#" class="">Activate</a>
                    <button class="d-flex align-items-center justify-content-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#email-supplier">Print Gift Card</button>
                </div>

                <div class="inventory-main-input-wrapper">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">
                                <span>Available at</span>
                                <select name="" id="">
                                    <option value="">Korea Market</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">
                                <span>Amount</span>
                                <input type="text" name="" id="">
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
                <div class="modal fade" id="email-supplier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content gift-card-modal-content">
                            <div class="gift-card-modal-header">
                                <h3>Gift Card</h3>
                            </div>
                            <div class="gift-card-modal-body">
                                <p>
                                    Rs : 1000
                                </p>
                            </div>
                            <div class="email-modal-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex" style="gap: 20px;">
                                            <button type="button" class="btn-action cancel" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn-action save">Print</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="footer-side">
                                            <div>
                                                <img src="./assets/images/bar-code.png" alt="">
                                            </div>
                                            <div>
                                                <p>Issued on 2023-05-20</p>
                                                <p>Valid for 2 years after issue date:. T&C applies</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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