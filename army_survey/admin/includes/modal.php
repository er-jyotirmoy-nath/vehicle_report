<div class="modal fade" id="catModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Add Category</h4>
			</div>

			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Category:</label>
						<input type="text" class="form-control" id="category-name">
					</div>

				</form>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-primary"
					onclick="save_category(document.getElementById('category-name').value,'Save')">Save</button>
			</div>
		</div>
	</div>
</div>


<!-- Rank -->
<div class="modal fade" id="rankModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Add Rank</h4>
			</div>

			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Rank:</label>
						<input type="text" class="form-control" id="rank-name">
					</div>

				</form>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-primary"
					onclick="save_rank(document.getElementById('rank-name').value,'Save')">Save</button>
			</div>
		</div>
	</div>
</div>
<!-- Station -->
<div class="modal fade" id="stationModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Add Station</h4>
			</div>

			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Station:</label>
						<input type="text" class="form-control" id="stat-name">
					</div>

				</form>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-primary"
					onclick="save_stat(document.getElementById('stat-name').value,'Save')">Save</button>
			</div>
		</div>
	</div>
</div>
<!-- Question -->
<div class="modal fade" id="quesModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Add Question</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Select
							Category:</label> 
							<select class="form-control" id="cat-select">
							<option>Select Category</option>
						</select>
					</div>
					<div class="form-group">
						<label for="message-text" class="form-control-label">Question:</label>
						<textarea class="form-control" id="question-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-primary" 
				onclick="save_ques(document.getElementById('cat-select').value,document.getElementById('question-text').value,'ok','Save')">Save</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit Question Popup -->
<div class="modal fade" id="queseditModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"
				style="background-color: #f44336; border-color: #f44336;">
				<button type="button" class="close" data-dismiss="modal"
					style="color: white;">×</button>
				<h4 class="modal-title" style="color: white;">Edit Question</h4>
			</div>
			<div class="modal-body">
				<form>
				<div class="form-group">
						<label for="recipient-name" class="form-control-label">
							Question ID:</label> 
							<input type="text" class="form-control" id="qes-id" readonly="readonly">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Select
							Category:</label> 
							<select class="form-control" id="cat-id-name">
							<option>Select Category</option>
						</select>
					</div>
					<div class="form-group">
						<label for="message-text" class="form-control-label">Question:</label>
						<textarea class="form-control" id="question-text-edit"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-primary" 
				onclick="save_ques(document.getElementById('cat-id-name').value,document.getElementById('question-text-edit').value,document.getElementById('qes-id').value,'Edit')">Save</button>
			</div>
		</div>
	</div>
</div>