<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include_common_links.html"; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Attendance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/progress_tracker.css">
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
							<h3><strong>Employee's Attendance</strong> </h3>
						</div>                    
                    </div>
                <div class="row">        
                    <!-- ============== Filtering Fields ========== -->
                    <div class="filter-container">
                        <label for="filter-by">Filtered by:</label>
                        <select id="filter-by">
                            <option value="date">Date</option>
                            <option value="absent">Absent</option>
                            <option value="approved-leave">Approved Leave</option>
                            <option value="month">Month</option>
                        </select>
                    </div>         
                      
                    <div class="cardBox">
                        <div class="inner-card">
                            <div>
                                <div class="numbers">05</div>
                                <div class="cardName">Working Days</div>
                            </div>           
                        </div>

                    <div class="inner-card">
                        <div>
                            <div class="numbers">142</div>
                            <div class="cardName">Present</div>
                        </div>
                    </div>

                    <div class="inner-card">
                        <div>
                            <div class="numbers">-13</div>
                            <div class="cardName">Absent</div>
                        </div>
                    </div>

                <div class="inner-card">
                    <div>
                        <div class="numbers">12</div>
                        <div class="cardName">Appoved Leave</div>
                    </div>
           
                </div>
                <div class="inner-card">
                    <div>
                        <div class="numbers">556</div>
                        <div class="cardName">Total Working hours</div>
                    </div>
           
                </div>
                <div class="inner-card">
                    <div>
                        <div class="numbers">7:55</div>
                        <div class="cardName">Average working hours</div>
                    </div>
            
                </div>
            </div>
            <div class="row1">                 
            </div>
            <div class="container">
                <div class="atend">     <div class="Dashleave1">
                    <div class="cardHeader">
                        <h2>Absent Today</h2>
                    </div>
    
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name <i class="fas fa-sort"></i></th>
        
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h4>01</h4>
                                </td>
                                
                                <td>
                                    <h4>Mugisha Ronald</h4>
                                </td>
                                
                                <td>
    
                                    <input type="radio" name="disable" value="01"> Flag as Leave
                                </td>
                            </tr>
                    
                            <tr>
                                <td>
                                    <h4>02</h4>
                                
                                <td>
                                    <h4>Wamani Derrick</h4>
                                </td>
                               
                                <td>
                                 
                                    <input type="radio" name="disable" value="01"> Flag as Leave
                                </td>
                            </tr>
                    
                        </tbody>
                    </table>

                    
                </div>
                </div>
                <div class="months"><div class="calendar-card">
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