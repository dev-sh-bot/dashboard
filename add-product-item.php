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
                <div class="main-select-fields d-flex justify-content-center align-items-center">
                    <select name="" id="">
                        <option value="Operation">Operation</option>
                        <option value="Operation">Operation</option>
                        <option value="Operation">Operation</option>
                    </select>
                    <select name="" id="">
                        <option value="Purchase">Purchase</option>
                        <option value="Purchase">Purchase</option>
                        <option value="Purchase">Purchase</option>
                    </select>
                    <select name="" id="">
                        <option value="Sales">Sales</option>
                        <option value="Sales">Sales</option>
                        <option value="Sales">Sales</option>
                    </select>
                    <select name="" id="">
                        <option value="Products">Products</option>
                        <option value="Products">Products</option>
                        <option value="Products">Products</option>
                    </select>
                    <select name="" id="">
                        <option value="Configuration">Configuration</option>
                        <option value="Configuration">Configuration</option>
                        <option value="Configuration">Configuration</option>
                    </select>
                </div>

                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Add Product / Test1</span>
                    </div>
                </div>

                <div class="inventory-main-input-wrapper">
                    <div class="d-flex justify-content-between">
                        <div class="two-col">
                            <label for="">
                                <span>Product Name</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="two-col">
                            <label for="">
                                <span>Internal Name</span>
                                <select name="" id="">
                                    <option value="">Internal Name</option>
                                    <option value="">Internal Name</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="inventory-input-tabs">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-Info-tab" data-bs-toggle="pill" data-bs-target="#pills-Info" type="button" role="tab" aria-controls="pills-Info" aria-selected="true">General Info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Inventory-tab" data-bs-toggle="pill" data-bs-target="#pills-Inventory" type="button" role="tab" aria-controls="pills-Inventory" aria-selected="false">Inventory</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Operation-tab" data-bs-toggle="pill" data-bs-target="#pills-Operation" type="button" role="tab" aria-controls="pills-Operation" aria-selected="false">Operation</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Info" role="tabpanel" aria-labelledby="pills-Info-tab">
                            <div class="d-flex justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Product Type</span>
                                        <select name="" id="">
                                            <option value="">Standard Product</option>
                                            <option value="">Standard Product</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>BarCode</span>
                                        <input type="text">
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Shop Price</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Product Category</span>
                                        <select name="" id="">
                                            <option value="">Drinks</option>
                                            <option value="">Drinks</option>
                                        </select>
                                    </label>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Cost Price</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Company</span>
                                        <input type="text">
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex align-items-streach justify-content-between">
                                <div class="two-col">
                                    <div class="d-flex flex-column w-100">
                                        <label for="">
                                            <span>Calculated Price</span>
                                            <input type="text">
                                        </label>
                                        <label for="" class="input-checked">
                                            <span>VAT</span>
                                            <input type="checkbox" name="" id="">
                                        </label>
                                    </div>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Product Description</span>
                                        <textarea name="" id="" cols="30" rows="4"></textarea>
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="pills-Inventory" role="tabpanel" aria-labelledby="pills-Inventory-tab">



                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-column two-col">
                                    <label for="">
                                        <span>Routes:</span>
                                        <div class="w-100">
                                            <label for="" class="input-checked">
                                                <input type="checkbox" name="" id="">
                                                <span>SHOP: Supply from Warehouse</span>
                                            </label>
                                        </div>
                                        <div class="w-100">
                                            <label for="" class="input-checked">
                                                <input type="checkbox" name="" id="">
                                                <span>Purchase: But from supplier</span>
                                            </label>
                                        </div>
                                        <div class="w-100">
                                            <label for="" class="input-checked">
                                                <input type="checkbox" name="" id="">
                                                <span>Manufacture: make from products or materials</span>
                                            </label>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex flex-column two-col">
                                    <label for="">
                                        <span>Tracking:</span>
                                        <div class="w-100">
                                            <label for="" class="input-checked">
                                                <input type="checkbox" name="" id="">
                                                <span>By Lot Number</span>
                                            </label>
                                        </div>
                                        <div class="w-100">
                                            <label for="" class="input-checked">
                                                <input type="checkbox" name="" id="">
                                                <span>No Tracking</span>
                                            </label>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Weight</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <div class="w-100">
                                        <label for="">
                                            <span>Warehouse</span>
                                            <div class="min-max-input d-flex justify-content-between w-100">
                                                <div class="two-col position-relative">
                                                    <span class="position-absolute">Min</span>
                                                    <input type="text">
                                                </div>
                                                <div class="two-col position-relative">
                                                    <span class="position-absolute">Max</span>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="measurement-input two-col">
                                    <div class="d-flex align-items w-100">
                                        <label for="">
                                            <span>Width</span>
                                            <input type="text">
                                        </label>
                                        <label for="">
                                            <span>Length</span>
                                            <input type="text">
                                        </label>
                                        <label for="">
                                            <span>Height</span>
                                            <input type="text">
                                        </label>
                                    </div>
                                </div>
                                <div class="two-col">
                                    <div class="w-100">
                                        <label for="">
                                            <span>Shop</span>
                                            <div class="min-max-input d-flex justify-content-between w-100">
                                                <div class="two-col position-relative">
                                                    <span class="position-absolute">Min</span>
                                                    <input type="text">
                                                </div>
                                                <div class="two-col position-relative">
                                                    <span class="position-absolute">Max</span>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-Operation" role="tabpanel" aria-labelledby="pills-Operation-tab">
                            <div class="two-col">
                                <div>
                                    <label for="">
                                        <span>Shop Price</span>
                                        <input type="text">
                                    </label>
                                </div>
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
            </section>
        </main>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>