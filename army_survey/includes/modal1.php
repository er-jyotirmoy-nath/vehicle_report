<!-- Modal is a bootstrap popup on the webpage -->
<div class="modal fade" id="adminLogin" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document"><!-- All information in the popup is shown as a document -->
		<div class="modal-content"><!-- Contains all the modal content header/body/footer-->
			<div class="modal-header" style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Login to User Account</h4>
			</div>

			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Login</a></li>
					<li><a data-toggle="tab" href="#menu1">Register</a></li>

				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						
						<p>
						<form id="frm1">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">UserName:</label>
								<input type="text" class="form-control" id="admin-name-id" required>
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Password:</label>
								<input type="password" class="form-control" id="admin-pass-id" required>
							</div>
							<button type="button" id="button1" class="btn btn-primary"
								onclick="login(document.getElementById('admin-name-id').value,document.getElementById('admin-pass-id').value,'admin',1)">Go</button>
						</form>
						</p>
					</div>
					<div id="menu1" class="tab-pane fade">
						
						<p>
						
						
						<form id="frm2">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">UserName:</label>
								<input type="text" class="form-control" id="admin-name-id1">
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Password:</label>
								<input type="password" class="form-control" id="admin-pass-id1">
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Confirm
									Password:</label> <input type="password" class="form-control"
									id="admin-pass-conf-id1">
							</div>
							<button type="button" id="button1" class="btn btn-primary"
								onclick="register(document.getElementById('admin-name-id1').value,document.getElementById('admin-pass-id1').value,'admin',2)">Save</button>
						</form>
						</p>
					</div>

				</div>


			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

<!-- Survey Popup -->
<div class="modal fade" id="survey_form" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal" style="color: white;">×</button><!-- Cross button on right of header to close the pop up -->
				<h4 class="modal-title" style="color: white;">Tell us about yourself</h4>
			</div>
			<div class="modal-body"><!-- Contents of the popup  -->
				<form>
					<table class="table table-bordered"><!-- To show a  table with border -->
						<tbody>
							<tr>
								<td><label>First Name(optional):</label></td>
								<td><input name="fname" id="fname" type="text" class="form-control"
									value="" ></td>
								<td><label>Last Name(optional):</label></td>
								<td><input name="lname" id="lname" type="text" class="form-control"
									value="" ></td>
							</tr>


							<tr>
								<td><label>Gender:<font style="color: red;">*</font></label></td>
								<td><select id="gender" class="form-control">
										<option>Male</option>
										<option>Female</option>
								</select></td>
								<td><label>Age:<font style="color: red;">*</font></label></td>
								<td><input name="age" id="age" type="number" class="form-control" value="" ></td>
							</tr>


							<tr>
								<td><label>Rank:<font style="color: red;">*</font></label></td>
								<td>
								<select id="rank" class="form-control">	</select>
								<!-- All the information under the drop down is coming through java script and php -->
								</td>
								<td><label>Station:<font style="color: red;">*</font></label></td>
								<td><select id="station" class="form-control"></select>
								<!-- All the information under the drop down is coming through java script and php -->
								</td>
							</tr>

							<tr>
								<td><label>Maritial_status:<font style="color: red;">*</font></label></td>
								<td><select id="m_stat" class="form-control">
										<option>Married</option>
										<option>Single</option>
								</select></td>
								<td><label>Army Number:<font style="color: red;">*</font></label></td>
								<td><input name="armnumber" id="armnumber" type="text"
									class="form-control" value="" ></td>
							</tr>

							<tr>
								<td><label>No. of Children:<font style="color: red;">*</font></label></td>
								<td><input name="age" id="noc" type="number" class="form-control"
									value="" size="30"></td>
								<td><label>No. of Children in school:<font style="color: red;">*</font></label></td>
								<td><input name="age" id="nocs" type="number" class="form-control"
									value="" size="30"></td>
							</tr>
							<tr>
								<td><label>Tenure(in months):<font style="color: red;">*</font></label></td>
								<td><input name="tenure" id="tenure" type="number" class="form-control"
									value="" size="30"></td>
								<td></td>
								<td></td>
							</tr>
							


						</tbody>
					</table>
				</form>
			</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-primary" id="save_creds">Take Survey</button>
			</div>
		</div>
	</div>
</div>