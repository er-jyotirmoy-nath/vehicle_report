/**
 * 
 */
$(document).ready(function() {
	getdata();
	getdata_rank();
	getdata_stat();
	getdata_ques("get", "ok", "ques");
	getdata_cread();
	getdata_dash();
	
});
/*$('#catModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Add Category')
  modal.find('.modal-body input').val(recipient)
});*/

function save_category(a, b) {
	var category = a;
	var psw = b;
	cat_data = [];
	cat_data[0] = category;
	cat_data[1] = psw;

	$.ajax({
		url : "ajax_140724022017.php",
		method : "post",
		data : {
			cat_data : cat_data
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(msg) {
			if (msg) {
				window.location.replace("admin.php?page=category");
			} else {
				alert(msg);

				window.location.replace("admin.php");
			}
		}
	});
}
function save_rank(a, b) {
	var rank = a;
	var psw = b;
	rank_data = [];
	rank_data[0] = rank;
	rank_data[1] = psw;

	$.ajax({
		url : "ajax_140724022017.php",
		method : "post",
		data : {
			rank_data : rank_data
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(msg) {
			if (msg) {
				window.location.replace("admin.php?page=category");
			} else {
				alert(msg);

				window.location.replace("admin.php");
			}
		}
	});
}
function save_stat(a, b) {
	if (a == "") {
		alert("Enter Rank");
	} else {
		var rank = a;
		var psw = b;
		stat_data = [];
		stat_data[0] = rank;
		stat_data[1] = psw;

		$.ajax({
			url : "ajax_140724022017.php",
			method : "post",
			data : {
				stat_data : stat_data
			},
			beforeSend : function(msg) {},
			afterSend : function(msg) {},
			success : function(msg) {
				if (msg) {
					window.location.replace("admin.php?page=category");
				} else {
					alert(msg);

					window.location.replace("admin.php");
				}
			}
		});
	}
}
//Save question
function save_ques(a, b, c, d) {
	if (b == "") {
		alert("Enter Question");
	} else {
		
		var category = a;
		var question = b;
		ques_data = [];
		ques_data[0] = category;
		ques_data[1] = question;
		ques_data[2] = c;
		ques_data[3] = d;

		$.ajax({
			url : "ajax_140724022017.php",
			method : "post",
			data : {
				ques_data : ques_data
			},
			beforeSend : function(msg) {},
			afterSend : function(msg) {},
			success : function(msg) {
				if (msg) {
					window.location.replace("admin.php?page=question");
				} else {
					alert(msg);

					window.location.replace("admin.php");
				}
			}
		});
	}
}
//get categories
function getdata() {
	var v = '';
	cat_show = [];
	cat_show[0] = "get";
	cat_show[1] = "ok";
	cat_show[2] = 'cat';
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			cat_show : cat_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v += "<tr><td>" + s + "</td><td>" + field.category_name + "</td></tr>";
				s++;
			});
			$("#cat-table").append(v);

		}
	});


}
function getdata_rank() {
	var v = '';
	rank_show = [];
	rank_show[0] = "get";
	rank_show[1] = "ok";
	rank_show[2] = 'cat';
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			rank_show : rank_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v += "<tr><td>" + s + "</td><td>" + field.Rank + "</td></tr>";
				s++;
			});
			$("#rank-table").append(v);

		}
	});


}
//Station Details Function
	function getdata_stat() {
		var v = '';
		stat_show = [];
		stat_show[0] = "get";
		stat_show[1] = "ok";
		stat_show[2] = 'cat';
		$.ajax({
			url : 'ajax_140724022017.php',
			type : "POST",
			datatype : "json",
			data : {
				stat_show : stat_show
			},
			beforeSend : function(msg) {},
			afterSend : function(msg) {},
			success : function(data) {
	
				console.log(data);
				var s = 1;
				$.each(jQuery.parseJSON(data), function(i, field) {
					v += "<tr><td>" + s + "</td><td>" + field.station_name + "</td></tr>";
					s++;
				});
				$("#stat-table").append(v);
	
			}
		});
	
	
	}
//Get Question Details from the question table
function getdata_ques(a, b, c) {
	var v = '';
	ques_show = [];
	ques_show[0] = a;
	ques_show[1] = b;
	ques_show[2] = c;
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			ques_show : ques_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v += "<tr><td>" + s + "</td><td>" + field.question + "</td><td>" + field.category + "</td><td>" + field.date_creat + "</td><td>" + 
					"<a href=\"#queseditModal\" data-toggle=\"modal\" data-whatever=\"" + field.qid + "\">Edit</a></td></tr>";
				s++;
			});
			$("#ques-table").append(v);

		}
	});


}
function getdata_cread() {
	var v = '';
	cred_show = [];
	cred_show[0] = "a";
	cred_show[1] = "b";
	cred_show[2] = "c";
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			cred_show : cred_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v += "<tr><td>" + field.Full_name + "</td><td>" + field.Age + "</td><td>" + field.RK_ID + "</td><td>" + field.Army_no 
				+ "</td><td>" + field.D_O_S + "</td><td>"  + field.Servey_id +"</td></tr>";
				s++;
			});
			$("#cred-table").append(v);

		}
	});


}
//Function to get Dashboard Data
function getdata_dash() {
	var v = '';star=' <i class="fa fa-thumbs-up" aria-hidden="true" style="color:#f44336;"></i> ';v_star='';
	admin_dash = [];
	admin_dash[0] = "a";
	admin_dash[1] = "b";
	admin_dash[2] = "c";
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			admin_dash : admin_dash
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v_star=''
				for(var i=0; i<field.rating;i++ ){
					v_star +=star; 
				}
				v += "<tr><td>" + field.station_name + "</td><td>" + field.category_name + "</td><td>" + v_star +"</td></tr>";
				s++;
			});
			$("#dash-table").append(v);

		}
	});


}

//Fetch Categories for the question pop up
$('#quesModal').on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	v = '';
	cat_show = [];
	cat_show[0] = "get";
	cat_show[1] = "ok";
	cat_show[2] = 'cat';
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			cat_show : cat_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v += "<option value=\"" + field.category_id + "\">" + field.category_name + "</option>";
				s++;
			});
			$("#cat-select").html(v);

		}
	});
});

//Edit Question Popup show data
$('#queseditModal').on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var v = "";
	var modal = $(this);
	var field = "";
	ques_show = [];
	ques_show[0] = recipient;
	ques_show[1] = "ok";
	ques_show[2] = "ques";
	$.ajax({
		url : 'ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			ques_show : ques_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {
			console.log(data);
			field = JSON.parse(data);
			
			$('#qes-id').val(field[0].qid);
			
			$('#question-text-edit').val(field[0].question);
			v = "<option value=\"" + field[0].cat_id + "\" selected>" + field[0].category + "</option>";
			$("#cat-id-name").html(v);
		}
	});

});

function logout(){
	
	login = [];
	login[0] = "ok";
	login[1] = "set";
	login[2] = "now";
	login[3] = "logout";
	$.ajax({
		url: "ajax_140724022017.php",
		method: "post",
		data: {login:login},
		beforeSend:function(msg){},
		afterSend:function(msg){},
		success:function(msg){
			if(msg){ window.location.replace("/army_survey/index.php");}
			
		else {
			alert(msg);
		}
		}
		});
	
}