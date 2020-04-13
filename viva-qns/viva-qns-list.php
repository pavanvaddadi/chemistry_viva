<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assests/css/global.css">
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assests/datatables/datatables.min.css">
    <title>Viva questions</title>
</head>
<body>
<?php
require '../getExpList.php';
$data   = $getExpQuery->fetch_all(MYSQLI_ASSOC);
?>
<nav class="navbar primary-color br-0">
    <div class="container wrapper">
        <div class="navbar-header">
            <div class="nav navbar-nav navbar-right iconBtn">
                <a class="navbar-brand text-white text-dec-none" href="../SelectExperiment.php">
                    <button class="btn btn-sm btn-default">Generate Questions</button>
                </a>
            </div>
            <div class="dropdown configBtn">
                <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown">Configure Data
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="../experiments/experiment-list.php">Configure Experiments</a></li>
                    <li><a href="./viva-qns-list.php">Configure Viva Questions</a></li>
                </ul>
            </div>
        </div>

        <div class="nav navbar-nav navbar-right customBtn">
            <a class="text-dec-none" href="../Logout.php">
                <button class="btn btn-sm btn-warning">Logout</button>
            </a>
        </div>
    </div>
</nav>


	<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>List of Viva Questions</h4>
                <button class="btn btn-default btn-sm pull pull-right addBtn" data-toggle="modal" data-target="#addMember" id="addMemberModalBtn">
					<span><i class="fa fa fa-plus fa-stack"></i> </span>New Question
				</button>
            </div>

            <div class="panel-body">
                <div class="removeMessages"></div>
				<table class="table table-striped" id="manageMemberTable">
					<thead>
						<tr>
                            <th>Viva Question</th>
                            <th>Exp No</th>
                            <th>Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

	<!-- add modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus fa-stack"></i>	Add New Viva Question</h4>
	      </div>
	      
	      <form class="form-horizontal" action="php_action/create.php" method="POST" id="createMemberForm">
              <div class="modal-body">
                  <div class="messages"></div>
                  <div class="form-group"> <!--/here teh addclass has-error will appear -->
                  <label for="expNo" class="col-sm-3 control-label">Experiment</label>
                  <div class="col-sm-9">
                      <!-- here the text will apper  -->
                          <select class="form-control mr-sm-2" title="select experiment" id="expNo" name="expNo" required>
                              <optgroup label="Group A">
                                  <?php
                                  foreach ($data as $row) {
                                      if($row['GroupType'] == 'A') {
                                          echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                      }
                                  }
                                  ?>
                              </optgroup>
                              <optgroup label="Group B">
                                  <?php
                                  foreach ($data as $row) {
                                      if($row['GroupType'] == 'B') {
                                          echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                      }
                                  }
                                  ?>
                              </optgroup>
                          </select>
                  </div>
              </div>
			      <div class="form-group"> <!--/here teh addclass has-error will appear -->
			    <label for="name" class="col-sm-3 control-label">Question</label>
			    <div class="col-sm-9">
                    <textarea class="form-control" id="name" name="name" placeholder="Enter Viva Question Name"></textarea>
				<!-- here the text will apper  -->
			    </div>
			  </div>
              </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">Save changes</button>
	            </div>
	      </form> 
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /add modal -->

	<!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="fa fa-trash-o fa-stack text-danger"></span> Remove Question</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to remove the question?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-primary" id="removeBtn">Yes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span><i class="fa fa-pencil fa-stack"></i></span> Edit Question</h4>
	      </div>

		<form class="form-horizontal" action="php_action/update.php" method="POST" id="updateMemberForm">
            <div class="modal-body">
	        	
	        <div class="edit-messages"></div>
                <div class="form-group"> <!--/here the addclass has-error will appear -->
                  <label for="editExpNo" class="col-sm-3 control-label">Experiment Name</label>
                  <div class="col-sm-9">
                      <select class="form-control mr-sm-2" title="select experiment" id="editExpNo" name="editExpNo" required>
                          <optgroup label="Group A">
                          <?php
                          foreach ($data as $row) {
                              if($row['GroupType'] == 'A') {
                                  echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                  }
                          }
                          ?>
                          </optgroup>
                          <optgroup label="Group B">
                              <?php
                              foreach ($data as $row) {
                                  if($row['GroupType'] == 'B') {
                                      echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                  }
                              }
                              ?>
                          </optgroup>
                      </select>
                      <!-- here the text will apper  -->
                  </div>
              </div>

			  <div class="form-group">
                  <label for="editName" class="col-sm-3 control-label">Question</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
				<!-- here the text will apper  -->
			    </div>
			  </div>

			  </div>	
            <div class="modal-footer editMemberModal">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary">Save changes</button>
	        </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->

	<!-- jquery plugin -->
	<script type="text/javascript" src="../assests/jquery/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="../assests/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="../assests/datatables/datatables.min.js"></script>
	<!-- include custom index.js -->
	<script type="text/javascript" src="custom/js/index.js"></script>

</body>
</html>
