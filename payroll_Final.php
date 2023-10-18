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
                            <div class="step completed">4</div>
                            <div> Process</div>
                        </div>          
                    </div>
                      
                    <div class="payroll3">
                        <div class="cardHeader-share">
                            <h2>Share Payroll via Email</h2>
                        </div>
                        
                        <div class="EmpDept">
                        
                            <button class="payrollbtn">Share on Mail</button>
                        </div>
                        <div class="EmpDept">
                            <div class="cardHeader">
                                
                            </div>
                            <button class="payrollbtn">Download Payroll</button>
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