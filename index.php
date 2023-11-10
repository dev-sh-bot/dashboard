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
         <header class="top-header d-flex w-100 justify-content-between">


            <div class="d-flex align-items-center alert-wrapper">
               <div class="toggle-button">
                  <button class="hamburger" id="toggleSidebar">☰</button>
               </div>

               <div class="notifications-wrapper">
                  <div class="alert-icon position-relative">
                     <img src="./assets/images/icons/Notification.png" alt="Notifications">
                     <span class="badge d-flex align-items-center justify-content-center">05</span> <!-- Add the badge here -->
                  </div>
                  <!-- <div class="list-dropdown-content">
                     <ul>
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                     </ul>
                  </div> -->
               </div>
               <div class="check-list-wrapper">
                  <div class="alert-icon position-relative">
                     <img src="./assets//images//icons/check-list.png" alt="Notifications">
                     <span class="badge d-flex align-items-center justify-content-center">05</span> <!-- Add the badge here -->
                  </div>
                  <!-- <div class="list-dropdown-content">
                     <ul>
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                     </ul>
                  </div> -->
               </div>


            </div>

            <div class="location-dropdown-wrapper position-relative">
               <div class="location-icon-wrapper">
                  <img src="./assets//images/icons/location.png" alt="location">
                  <span>Korea Market</span>
               </div>
               <div class="location-content-wrapper">
                  <ul class="p-0 m-0">
                     <li><a href="#">Location 1</a></li>
                     <li><a href="#">Location 2</a></li>
                     <li><a href="#">Location 3</a></li>
                  </ul>
               </div>
            </div>

            <div class="user-dropdown-wrapper">
               <div class="d-flex align-items-center">
                  <div class="user-info d-flex flex-column align-items-end">
                     <span class="user-name">John Doe</span>
                     <span class="user-role">Admin</span>
                  </div>
                  <div class="user-avatar position-relative">
                     <!-- if Image exist show image -->
                     <!-- <img src="./assets/images/icons/user-profile-icon.png" alt="User Avatar"> -->

                     <!-- else show user name badge -->
                     <span class="user-name-badge d-flex align-items-center justify-content-center">JD</span>


                     <span class="online"></span>
                  </div>
               </div>
               <div class="user-dropdown-content-wrapper">
                  <ul>
                     <li><a href="#">Profile</a></li>
                     <li><a href="#">Settings</a></li>
                     <li><a href="#">Sign Out</a></li>
                  </ul>
               </div>
            </div>
         </header>

         <section class="dashboard-page-main-wrapper d-flex">
            <div class="total-number-section-wrapper">

               <div class="d-flex align-items-streach">
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/sales.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>5000</span>
                        <span>Total Sales</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/profit.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>10,000</span>
                        <span>Total Profit</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/Revenue.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>2000</span>
                        <span>Total Revenue</span>
                     </div>
                  </div>
               </div>

               <div class="d-flex align-items-streach">
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/orders.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>50,000</span>
                        <span>Total Orders</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/products.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>100,000</span>
                        <span>Total Products</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/Location-bg.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>100</span>
                        <span>Total Location</span>
                     </div>
                  </div>
               </div>

               <div class="d-flex align-items-streach">
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/employees.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>600</span>
                        <span>Total Employees</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/categories.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>500</span>
                        <span>Total Categories</span>
                     </div>
                  </div>
                  <div class="total-number-wrapper d-flex align-items-center justify-content-center">
                     <div class="total-number-image">
                        <img src="./assets/images/icons/Amount.png" alt="">
                     </div>
                     <div class="total-number-counting">
                        <span>50000</span>
                        <span>Total Amount</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="dashboard-notification-wrapper d-flex flex-column justify-content-between">
               <div class="dashboard-notification-header d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <span><img src="./assets/images/icons/Notification.png" alt=""></span>
                     <span>Notification</span>
                  </div>
                  <div><a href="#">See All</a></div>
               </div>
               <div class="dashboard-notification-list">
                  <ul class="m-0 p-0">
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="notification-badge d-flex align-items-center justify-content-center">
                                 A
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="notification-small-heading">Recently Payment</span>
                                 <span class="notification-description">$255 payment Recieved</span>
                              </span>
                           </div>
                           <div>
                              <span class="notification-date">31 oct 2023</span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="notification-badge d-flex align-items-center justify-content-center">
                                 A
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="notification-small-heading">1 message</span>
                                 <span class="notification-description">From Ryan</span>
                              </span>
                           </div>
                           <div>
                              <span class="notification-date">31 oct 2023</span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="notification-badge d-flex align-items-center justify-content-center">
                                 A
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="notification-small-heading">Recently Payment</span>
                                 <span class="notification-description">$255 payment Recieved</span>
                              </span>
                           </div>
                           <div>
                              <span class="notification-date">31 oct 2023</span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="notification-badge d-flex align-items-center justify-content-center">
                                 A
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="notification-small-heading">Recently Payment</span>
                                 <span class="notification-description">$255 payment Recieved</span>
                              </span>
                           </div>
                           <div>
                              <span class="notification-date">31 oct 2023</span>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </section>

         <section class="dashboard-page-main-wrapper d-flex">
            <div class="dashboard-store-table-wrapper">
               <div class="dashboard-store-header d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <span><img src="./assets/images/icons/Notification.png" alt=""></span>
                     <span>Stores</span>
                  </div>
                  <div><a href="#">See All</a></div>
               </div>
               <table>
                  <thead>
                     <tr>
                        <th>Stores</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Company</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Warehouse</td>
                        <td>WH</td>
                        <td>123 some road, Maitland</td>
                        <td>Korea Market</td>
                     </tr>
                     <tr>
                        <td>Shop</td>
                        <td>SH</td>
                        <td>123 some road, Lululand</td>
                        <td>Korea Market</td>
                     </tr>
                     <tr>
                        <td>Gogi Observatory</td>
                        <td>GoOb</td>
                        <td>123 some road, Lululand</td>
                        <td>Gogi</td>
                     </tr>
                     <tr>
                        <td>Shop</td>
                        <td>SH</td>
                        <td>123 some road, Lululand</td>
                        <td>Korea Market</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="dashboard-location-wrapper">
               <div class="dashboard-location-header d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <span><img src="./assets/images/icons//location.png" alt=""></span>
                     <span>Locations</span>
                  </div>
                  <div><a href="#">See All</a></div>
               </div>
               <div class="dashboard-location-list">
                  <ul class="m-0 p-0">
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Locations</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Shop</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Locations</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Shop</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Locations</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex align-items-top justify-content-between">
                           <div class="d-flex">
                              <span class="location-badge d-flex align-items-center justify-content-center">
                                 <img src="./assets/images/icons/location-purple.png" alt="">
                              </span>
                              <span class="d-flex flex-column">
                                 <span class="location-small-heading">Shop</span>
                                 <span class="location-description">WH, Korea Market</span>
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>

         </section>
      </main>
   </div>

   <?php include("includes/scripts.php"); ?>
</body>

</html>