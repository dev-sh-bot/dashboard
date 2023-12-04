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
                        <span class="heading">Purchase Order / PO00013</span>
                    </div>
                </div>

                <div class="purchase-order-modal-btns d-flex align-items-center">
                    <button class=" " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#email-supplier">Email Supplier</button>
                    <button class=" " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirm-order">Confirm Order</button>
                    <a href="#" class="">Cancel</a>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div>
                        <div class="two-col">
                            <label for="">
                                <span>Supplier</span>
                                <select name="" id="">
                                    <option value="">Bread Maker Company</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="invertory-main-input-wrapper">
                    <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                        <h4>Products</h4>
                        <div><a href="#">Add New</a></div>
                    </div>

                    <div class="inventory-row-inputs d-flex">
                        <label for="">
                            <select name="" id="">
                                <option value="">Bread</option>
                                <option value="">Bread</option>
                            </select>
                        </label>
                        <label for="">
                            <input type="text" placeholder="Quantity">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Packaging">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Packaging Quantity">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Total(ex vat)">
                        </label>
                    </div>
                </div>

                <div class="invertory-main-table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Packaging</th>
                                <th>Packaging Quantity</th>
                                <th>Total(ex vat)</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>

                                <td>Bread</td>
                                <td>48</td>
                                <td>24</td>
                                <td>2</td>
                                <td>R1000</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="invertory-main-subtotal-wrapper">
                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-12 col-md-2 ">
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Subtotal:</span>
                                <span>R1000.00</span>
                            </div>
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Vat:</span>
                                <span>R504.83</span>
                            </div>
                            <div class="d-flex align-item-center justify-content-between">
                                <span>Total:</span>
                                <span>R1504.83</span>
                            </div>
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
                        <div class="modal-content">
                            <div class="email-modal-header">
                                <div class="email-info-wrapper d-flex align-items-end justify-content-center">
                                    <span class="d-inline-block">Recipient:</span>
                                    <input class="flex-grow-1" type="text" value="test@asdasdasd.com">
                                </div>
                                <div class="email-info-wrapper d-flex align-items-end justify-content-center">
                                    <span class="d-inline-block">Subject:</span>
                                    <input class="flex-grow-1" type="text" value="Korea Market RFQ">
                                </div>
                            </div>
                            <div class="email-modal-body">
                                <p>
                                    Dear Bread Maker Company
                                    <br>
                                    Here is in attachment a request for quotation P00013 from Korea Market.
                                    If you have any questions, please do not hesitate to contact us.
                                    <br>
                                    Best regards,
                                </p>


                                <div class="pdf-wrapper d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="./assets/images/icons/pdf-icon.png" class="d-block me-2" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span>RFQ_PO0013.pdf</span>
                                            <span>PDF</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="./assets/images/icons/check.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="email-modal-footer d-flex">
                                <button type="button" class="btn-action cancel" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn-action save">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="confirm-order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="email-modal-header">
                                <div class="email-info-wrapper d-flex align-items-end justify-content-center">
                                    <span class="d-inline-block">Recipient:</span>
                                    <input class="flex-grow-1" type="text" value="test@asdasdasd.com">
                                </div>
                                <div class="email-info-wrapper d-flex align-items-end justify-content-center">
                                    <span class="d-inline-block">Subject:</span>
                                    <input class="flex-grow-1" type="text" value="Korea Market RFQ">
                                </div>
                                <div class="email-info-wrapper d-flex align-items-end justify-content-center">
                                    <span class="d-inline-block">Deliver to:</span>
                                    <select class="flex-grow-1">
                                        <option value="">Warehouse</option>
                                        <option value="">Warehouse</option>
                                        <option value="">Warehouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="email-modal-body">
                                <p>
                                    Dear Bread Maker Company
                                    <br>
                                    Here is in attachment a request for quotation P00013 from Korea Market.
                                    <br>
                                    Please deliver to Korea Market Warehouse in 3 mowbray road, Maitland.
                                    <br>
                                    If you have any questions, please do not hesitate to contact us.
                                    <br>
                                    Best regards,
                                </p>


                                <div class="pdf-wrapper d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="./assets/images/icons/pdf-icon.png" class="d-block me-2" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span>RFQ_PO0013.pdf</span>
                                            <span>PDF</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="./assets/images/icons/check.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="email-modal-footer d-flex">
                                <button type="button" class="btn-action cancel" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn-action save">Save</button>
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