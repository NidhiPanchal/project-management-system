<?php 
//include "connect.php";
//include "main-files.php";
//include "load_files.php";
include "layout.php";
?>

<body id="dashboard">
	
	<div class="dashboard-container">
		<div class="dash-wrapper">

			<div class="dash-display-cards">
				<div class="flex-container">
					
					<div>
						<div class="card-s">
							<div class="card">
					            <div class="card-body card-1 z-depth-2 danger-color-dark">
					                <h6 class="danger-color z-depth-3">PROJECTS</h6>
					            </div>
					        </div>
					    </div>
					</div>

					<div>
						<div class="card-s">
							<div class="card">
					            <div class="card-body card-2 z-depth-2 success-color-dark">
					                <h6 class="success-color z-depth-3">COMPLETED</h6>
					            </div>
					        </div>
					    </div>
					</div>

					<div>
						<div class="card-s">
							<div class="card">
					            <div class="card-body card-3 z-depth-2 info-color-dark">
					                 <h6 class="info-color z-depth-3">IN PROGRESS</h6>
					            </div>
					        </div>
					    </div>
					</div>

					<div>
						<div class="card-s">
							<div class="card">
					            <div class="card-body card-4 z-depth-2 warning-color-dark">
					                 <h6 class="warning-color z-depth-3">DEADLINE</h6>
					            </div>
					        </div>
					    </div>
					</div>

				</div>
			</div>
		</div>
	</div>


</body>

<?php 
include "layout_footer.php";
include "footer.php"; ?>