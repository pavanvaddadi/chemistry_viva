// global the manage memeber table 
var manageMemberTable;

$(document).ready(function() {
	manageMemberTable = $("#manageMemberTable").DataTable({
		"ajax": "php_action/retrieve.php",
		"order": []
	});

	$("#addMemberModalBtn").on('click', function() {
		// reset the form 
		$("#createMemberForm")[0].reset();
		// remove the error 
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		// empty the message div
		$(".messages").html("");

		// submit form
		$("#createMemberForm").unbind('submit').bind('submit', function() {

			$(".text-danger").remove();

			var form = $(this);

			// validation
			var name = $("#name").val();
			var expNo = $("#expNo").val();
			var group = $("#group").val();

			if(name == "") {
				$("#name").closest('.form-group').addClass('has-error');
				$("#name").after('<p class="text-danger">The Experiment Name field is required</p>');
			} else {
				$("#name").closest('.form-group').removeClass('has-error');
				$("#name").closest('.form-group').addClass('has-success');				
			}

			if(expNo == "") {
				$("#expNo").closest('.form-group').addClass('has-error');
				$("#expNo").after('<p class="text-danger">The Experiment No field is required</p>');
			} else {
				$("#expNo").closest('.form-group').removeClass('has-error');
				$("#expNo").closest('.form-group').addClass('has-success');
			}

			if(group == "") {
				$("#group").closest('.form-group').addClass('has-error');
				$("#group").after('<p class="text-danger">Select the group Type</p>');
			} else {
				$("#group").closest('.form-group').removeClass('has-error');
				$("#group").closest('.form-group').addClass('has-success');
			}

			if(name && expNo && group) {
				//submit the form to server
				$.ajax({
					url : form.attr('action'),
					type : form.attr('method'),
					data : form.serialize(),
					dataType : 'json',
					success:function(response) {
						// remove the error
						$(".form-group").removeClass('has-error').removeClass('has-success');
						if(response.success == true) {
							$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <i class="fa fa-check fa-stack"></i> </strong>'+response.messages+
							'</div>');

							// reset the form
							$("#createMemberForm")[0].reset();		

							// reload the datatables
							manageMemberTable.ajax.reload(null, false);
							// this function is built in function of datatables;

						} else {
							$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="fa fa-exclamation-circle"></span> </strong>'+response.messages+
							'</div>');
						}  // /else
					} // success  
				}); // ajax submit
			} /// if


			return false;
		}); // /submit form for create member
	}); // /add modal

});

function removeMember(id = null) {
	if(id) {
		// click on remove button
		$("#removeBtn").unbind('click').bind('click', function() {
			$.ajax({
				url: 'php_action/remove.php',
				type: 'post',
				data: {exp_id : id},
				dataType: 'json',
				success:function(response) {
					if(response.success == true) {						
						$(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="fa fa-check fa-stack"></span> </strong>'+response.messages+
							'</div>');

						// refresh the table
						manageMemberTable.ajax.reload(null, false);

						// close the modal
						$("#removeMemberModal").modal('hide');

					} else {
						$(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
							'</div>');
					}
				}
			});
		}); // click remove btn
	} else {
		alert('Error: Refresh the page again');
	}
}

function editMember(id = null) {
	if(id) {

		// remove the error 
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		// empty the message div
		$(".edit-messages").html("");

		// remove the id
		// $("#editExpNo").remove();

		// fetch the member data
		$.ajax({
			url: 'php_action/getSelectedMember.php',
			type: 'post',
			data: {exp_Id : id},
			dataType: 'json',
			success:function(response) {
				$("#editExpNo").val(response.ExperimentNumber);

				$("#editName").val(response.ExperimentName);

				$("#editGroup").val(response.GroupType);


				// mmeber id 
				$(".editMemberModal").append('<input type="hidden" name="exp_Id" id="exp_Id" value="'+response.ExperimentNumber+'"/>');

				// here update the member data
				$("#updateMemberForm").unbind('submit').bind('submit', function() {
					// remove error messages
					$(".text-danger").remove();

					var form = $(this);

					// validation
					var editExpNo = $("#editExpNo").val();
					var editExpName = $("#editName").val();
					var editGroup = $("#editGroup").val();

					if(editExpName === "") {
						$("#editName").closest('.form-group').addClass('has-error');
						$("#editName").after('<p class="text-danger">The Name field is required</p>');
					} else {
						$("#editName").closest('.form-group').removeClass('has-error');
						$("#editName").closest('.form-group').addClass('has-success');				
					}

					if(editExpNo == "") {
						$("#editExpNo").closest('.form-group').addClass('has-error');
						$("#editExpNo").after('<p class="text-danger">The Exp Number field is required</p>');
					} else {
						$("#editExpNo").closest('.form-group').removeClass('has-error');
						$("#editExpNo").closest('.form-group').addClass('has-success');
					}

					if(editGroup === "") {
						$("#editGroup").closest('.form-group').addClass('has-error');
						$("#editGroup").after('<p class="text-danger">The Group Type field is required</p>');
					} else {
						$("#editGroup").closest('.form-group').removeClass('has-error');
						$("#editGroup").closest('.form-group').addClass('has-success');
					}


					if(editExpName && editExpNo && editGroup) {
						$.ajax({
							url: form.attr('action'),
							type: form.attr('method'),
							data: form.serialize(),
							dataType: 'json',
							success:function(response) {
								if(response.success === true) {
									$(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span><i class="fa fa-check fa-stack"></i></span> </strong>'+response.messages+
									'</div>');

									// reload the datatables
									manageMemberTable.ajax.reload(null, false);
									// this function is built in function of datatables;

									// remove the error 
									$(".form-group").removeClass('has-success').removeClass('has-error');
									$(".text-danger").remove();
								} else {
									$(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span><i class="fa fa-exclamation-circle"></i> </strong>'+response.messages+
									'</div>')
								}
							} // /success
						}); // /ajax
					} // /if

					return false;
				});

			} // /success
		}); // /fetch selected member info

	} else {
		alert("Error : Refresh the page again");
	}
}
