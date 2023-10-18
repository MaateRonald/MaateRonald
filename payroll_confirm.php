<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include_common_links.html"; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll-Confirm</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/progress_tracker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
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
							<h3><strong>Payroll Processing - Confirm Payroll</strong> </h3>
						</div>                    
                    </div> 
                </div>
             
				<div class="Emplist mb-2 mb-xl-3">
                             
                    <!-- ============== Tracker ========== -->
                    <div class="tracker">
                        <div class="Payheader">
                            <h2>Payroll Processing</h2>
                        </div>
                        <div class="progress-marker">
                            <div class="step completed">1</div>
                            <div> Select</div>
                            <div class="line"></div>
                            <div class="step completed">2</div>
                            <div> Review</div>
                            <div class="line"></div>
                            <div class="step completed">3</div>
                            <div> Confirm & Preview</div>
                            <div class="line"></div>
                            <div class="step">4</div>
                            <div> Process</div>
                        </div>          
                    
                    </div>
                    <div class="filter-container">
                        
                    </div> 
                      
                        <!-- ============== Payroll List ========== -->
                        <div class="payroll2">
                <div class="cardHeader">
                    <h2>Final Payroll List</h2>
                </div>
                <h5>19 Employees processed</h5>

                <table id="confirm" class="display">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>First Name <i class="fas fa-sort"></i></th>
                            <th>Last Name <i class="fas fa-sort"></i></th>
                            <th>Days Present</th>
                            <th>Gross Pay <i class="fas fa-sort"></i></th>
                            <th>Deductions <i class="fas fa-sort"></i></th>
                            <th>Netpay</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Jackie.jpeg" alt=""></div>
                            </td>
                            <td>Jackline</td>
                            <td>Ayesiza</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                
                        <tr>
                            <td>02</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Samuel.jpeg" alt=""></div>
                            </td>
                            <td>Mugisha</td>
                            <td>Ronald</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Derrick.jpeg" alt=""></div>
                            </td>
                            <td>Wamani</td>
                            <td>Derrick</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Zbrendah.jpeg" alt=""></div>
                            </td>
                            <td>Zawedde</td>
                            <td>Brendah</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Liz.jpeg" alt=""></div>
                            </td>
                            <td>Ochieng</td>
                            <td>Samuel</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td width="60px">
                                <div class="imgBx"><img src="img/photos/Samuel.jpeg" alt=""></div>
                            </td>
                            <td>Mugisha</td>
                            <td>Ronald</td>
                            <td>24</td>
                            <td>1,200,000</td>
                            <td>230,000</td>
                            <td>970,000</td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
				</div> 
                <div > 
                    <button class="btn-primary">Back</button>
                    <button class="btn-primary">Proceed</button>
                </div>
            </main>
            <?php include_once "include_footer.html"; ?>
        </div>
    </div>
    <script>
         $(document).ready(function() {
            $('#confirm').DataTable();
        });
    </script>
        
    <script src="js/app.js"></script>
    <script src="js/year.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    
</body>
</html>