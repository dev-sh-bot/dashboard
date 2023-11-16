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
                    </select>
                    <select name="" id="">
                        <option value="Sales">Sales</option>
                    </select>
                    <select name="" id="">
                        <option value="Products">Products</option>
                    </select>
                    <select name="" id="">
                        <option value="Configuration">Configuration</option>
                    </select>
                </div>
                <div class="invertory-main-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Stores</th>
                                <th>Receipt</th>
                                <th>Internal Transfer</th>
                                <th>Delivery Orders</th>
                                <th>Return</th>
                                <th>Scrape</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>Warehouse</span></td>
                                <td><span class="active">2 of Process</span></td>
                                <td><span>0 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                            </tr>
                            <tr>
                                <td><span>Shop</span></td>
                                <td><span class="active">2 of Process</span></td>
                                <td><span>-</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                            </tr>
                            <tr>
                                <td><span>Gogi Newlands</span></td>
                                <td><span class="active">2 of Process</span></td>
                                <td>-</td>
                                <td><span>-</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                            </tr>
                            <tr>
                                <td><span>Gogi Observatory</span></td>
                                <td><span class="active">2 of Process</span></td>
                                <td>-</td>
                                <td><span>-</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
                            </tr>
                            <tr>
                                <td><span>Central Kitchen</span></td>
                                <td><span class="active">2 of Process</span></td>
                                <td><span>-</span></td>
                                <td><span>-</span></td>
                                <td><span class="active">4 of Process</span></td>
                                <td><span class="active">4 of Process</span></td>
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