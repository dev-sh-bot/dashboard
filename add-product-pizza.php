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

            <section class="inventory-main-wrapper d-flex flex-column">
                <div class="main-inventory-heading d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="go-back-icon d-inline-block"><img src="./assets/images/icons/arrow-back.png" alt=""></span>
                        <span class="heading">Product / Food Ingredient1</span>
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
                                    <option value="">Internal name ingredient</option>
                                    <option value="">Internal name ingredient</option>
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
                                            <option value="">Food</option>
                                            <option value="">Food</option>
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
                                        <span>Shop Price (in R)</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Product Category</span>
                                        <select name="" id="">
                                            <option value="">Mains</option>
                                            <option value="">Mains</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Cost Price (in R)</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Company</span>
                                        <input type="text" name="" id="">
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
                                <div class="two-col">
                                    <div class="w-100">
                                        <label for="">
                                            <span>Gogi New</span>
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

                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Some Farm</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <select name="" id="">
                                            <option value="">White Flour</option>
                                            <option value="">Tomato Sauce</option>
                                            <option value="">Tomato Sauce</option>
                                        </select>
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Quantity">
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Units">
                                    </label>
                                </div>
                            </div>

                            <div class="invertory-main-table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Ingredients</th>
                                            <th>Quantity</th>
                                            <th>Units</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>White Flour</td>
                                            <td>500</td>
                                            <td>g</td>
                                        </tr>
                                        <tr>
                                            <td>Tomato Sauce</td>
                                            <td>200</td>
                                            <td>ml</td>
                                        </tr>
                                        <tr>
                                            <td>Tomato Sauce</td>
                                            <td>200</td>
                                            <td>ml</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-Operation" role="tabpanel" aria-labelledby="pills-Operation-tab">
                            <div class="d-flex align-items-streach justify-content-between">
                                <div class="two-col">
                                    <label for="">
                                        <span>Per (in Min)</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="two-col">
                                    <label for="">
                                        <span>Kitchen Station:</span>
                                        <select name="" id="">
                                            <option value="">Frying Section 1</option>
                                            <option value="">Frying Section 1</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <div class="invertory-main-input-wrapper">
                                <div class="invertory-main-input-header d-flex align-items-center justify-content-between">
                                    <h4>Suppliers</h4>
                                    <div><a href="#">Add New</a></div>
                                </div>

                                <div class="inventory-row-inputs d-flex">
                                    <label for="">
                                        <select name="" id="">
                                            <option value="">Bread maker</option>
                                        </select>
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Product Name">
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Product Code">
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Quantity">
                                    </label>
                                    <label for="">
                                        <input type="text" placeholder="Price">
                                    </label>
                                </div>
                            </div>

                            <div class="invertory-main-table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Supplier Name</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Bread maker</td>
                                            <td>Bread test1</td>
                                            <td>BT1046</td>
                                            <td>24</td>
                                            <td>R480</td>
                                        </tr>
                                    </tbody>
                                </table>
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