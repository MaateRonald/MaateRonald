<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include_common_links.html"; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-HR</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
		body {
			opacity: 0;
		}

	</style>

</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">

	<div class="wrapper">
        <?php include_once "include_hr_sidebar.html"; ?>

        <div class="main">

            <?php include_once "include_top_nav_bar.html"; ?>
        
            <main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Welcome:</strong> Mugisha Ronald</h3>
						</div>                    
                    </div> 
                </div>
                    <!-- ======================= Top Cards ================== -->
				<div class="row mb-2 mb-xl-3">
                   
					<div class="cardBox">
                        <div class="inner-card">
                            <div>
                                <div class="numbers">504</div>
                                <div class="cardName">Total Employees</div>
                            </div>

                            <div class="iconBx">
                                <ion-icon name="people-outline"></ion-icon>
                                
                            </div>
                        </div>

                        <div class="inner-card">
                            <div>
                                <div class="numbers">80</div>
                                <div class="cardName">Employees on Leave</div>
                            </div>

                            <div class="iconBx">
                                <ion-icon name="airplane-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="inner-card">
                            <div>
                                <div class="numbers">06</div>
                                <div class="cardName">New Employees</div>
                            </div>

                            <div class="iconBx">
                                <ion-icon name="person-add-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="inner-card">
                            <div>
                                <div class="numbers">04</div>
                                <div class="cardName">Onboarding Today</div>
                            </div>

                            <div class="iconBx">
                                <ion-icon name="compass-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===========Dashboard cards ================= -->
                <div class="cardBox mb-xl-3">
                    <div class="Emplist mb-2 mb-xl-3">
                        <div class="cardHeader">
                            <h2>Employees on Leave</h2>
                        </div>

                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/nyakato.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Ayesiza <br> <span>Jackline</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samuel.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Wamani<br> <span>Derrick</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Roger.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Elizabeth<br> <span>Achalia</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samoch.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Ronald<br> <span>Mugisha</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samuel.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Brendah<br> <span>Zawedde</span></h4>
                                </td>
                            </tr>

                        </table>  
                    </div>

                    <!-- ================= New Employees List ================ -->
                    <div class="Emplist mb-2 mb-xl-3">
                        <div class="cardHeader">
                            <h2>New Employees List</h2>
                        </div>

                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/nyakato.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Nyakato <br> <span>Kurusumu</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samoch.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Nabakooza<br> <span>Shebrah</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Roger.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Elizabeth<br> <span>Achalia</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samuel.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Mugisha<br> <span>Ronald</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="assets/imgs/Samoch.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Brian<br> <span>Musinguzi</span></h4>
                                </td>
                            </tr>

                        </table>   
                    </div>
           
            
                    <!-- ================= Employees by Department chart================   -->
                    <div class="Emplist mb-2 mb-xl-3">
                        <div class="cardHeader">
                            <h2>Employees by Department</h2>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="piechart"> </div>
                        </div> 
                            <div class="legend-item">
                                <div class="color-box" style="background-color: pink "></div>
                                <span>IT Solutions</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: lightblue"></div>
                                <span>Sales & Marketing</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: orange"></div>
                                <span>Finance & Administration</span>
                            </div> 
                    </div>
                    <!-- ============== Upcoming Holidays ==================== -->
                    <div class="holidays">
                        <div class="cardHeader">
                            <h2>Incoming Holidays</h2>
                        </div>
                        <ul class="specialday">
                            <li class="list-items">9th October - Independance Day</li>
                            <li class="list-items">15th November- Eid Al-Duha Day</li>
                            <li class="list-items">25th December - Christman Day</li>
                            <li class="list-items">26th December - Boxing Day</li>
                        </ul>
                    </div>
            
                    <!-- ====================== Second Row ======================================= -->          
             
                    <div class="second-row1"> 
                        <div class="cardHeader">
                            <h2>Upcoming Leave</h2>
                        </div>
                        <ul class="specialday">
                            <li class="list-items">17th October - Zawedde Brendah</li>
                            <li class="list-items">22th November- Isaac Kuboi</li>
                            <li class="list-items">04th December - Ayesiza Jackline</li>
                            <li class="list-items">26th December - Amanya Ukasha</li>
                        </ul>
                    </div>
                    <div class="calendar-card">
                        <table>
                          <thead>
                            <tr>
                              <th colspan="7" class="current-month">August 2023</th>
                            </tr>
                            <tr>
                              <th>Sun</th>
                              <th>Mon</th>
                              <th>Tue</th>
                              <th>Wed</th>
                              <th>Thu</th>
                              <th>Fri</th>
                              <th>Sat</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>1</td>
                              <td>2</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                              </tr>
                              <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                              </tr>
                              <tr>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                              </tr>
                             <tr>
                              <td>31</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div> 
            </main>
            <?php include_once "include_footer.html"; ?>
        </div>
    </div>
        
    <script src="js/app.js"></script>
    <script src="js/year.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    
</body>
</html>