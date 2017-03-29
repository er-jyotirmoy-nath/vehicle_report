/**
 * 
 */

$('#adminLogin').on('show.bs.modal', function (event) {
		
		  var button = $(event.relatedTarget); // Button that triggered the modal
		  var recipient = button.data('whatever'); // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this);
		  modal.find('.modal-title').text('Login to Admin Section ');
		  //var user = modal.find('.modal-body input').val();
		  
		});
$('#survey_form').on('show.bs.modal', function (event) {
	
	getdata_stat();
	getdata_rank();
	});

function login(a,b,c,d){
	if(a == "" || b == ""){alert("enter username");}
	
	else{
	var uname = a;
	var psw = b;
	login = [];
	login[0] = uname;
	login[1] = psw;
	login[2] = c;
	login[3] = "login";
	$.ajax({
		url: "admin/ajax_140724022017.php",
		method: "post",
		data: {login:login},
		beforeSend:function(msg){},
		afterSend:function(msg){},
		success:function(msg){
			
			if(msg==1){ window.location.replace("admin/admin.php");}
			
		else {
			alert(msg);
			$("#frm"+d)[0].reset();
			window.location.replace("index.php");
		}
		}
		});
	}
}
function register(a,b,c,d){
	if(a == ""){alert("enter username");}
	if(b == ""){alert("enter password");}
	else{
	var uname = a;//stroes username
	var psw = b;//stores the password
	login = [];//create empty array
	login[0] = uname;//store username
	login[1] = psw;//store password
	login[2] = c;
	login[3] = "register";//tell php to register
	//ajax start
	$.ajax({
		url: "admin/ajax_140724022017.php",
		method: "post",
		data: {login:login},
		
		success:function(msg){
			if(msg == "Ok"){ window.location.replace("index.php");}
			
		else {
			alert(msg);
			
			window.location.replace("index.php");
		}
		}
		});
	}
}

function getdata(){
    Event = [];
    Event[0] = "get";
    Event[1] = "ok";
    Event[2] = '4';
    $.ajax({
        url: 'ajax_161422022017.php',
        type: "POST",
        datatype: "json",
        data: {Event: Event},
        beforeSend: function (msg) {
            $("#res").html("<i class=\"fa fa-refresh fa-spin\" style=\"font-size:24px;\" ></i>");

        },
        afterSend: function (msg) {
            $("#res").html("<i class=\"fa fa-refresh fa-spin\" style=\"font-size:24px;\" ></i>");

        },
        success: function (data) {

        	/*  $.getJSON(data.data, function(result){
                 $.each(result, function(i, field){
                     $("#res").append(field + " ");
                 });
             }); */
             $.each(jQuery.parseJSON(data), function(i, field){
                 $("#res").append(field.CUSTOMERNUMBER + " ");
             });
            
        	 
        }
    });

	
}

function getdata_stat() {
	var v1 = '<option value="">Select Location</option>';
	stat_show = [];
	stat_show[0] = "get";
	stat_show[1] = "ok";
	stat_show[2] = 'cat';
	$.ajax({
		url : 'admin/ajax_140724022017.php',
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
				v1 += "<option value=\""+field.Station_id+"\">" + field.station_name + "</option>";
				s++;
			});
			$("#station").html(v1);

		}
	});


}

function getdata_rank() {
	var v2 = '<option value="">Select Rank</option>';
	rank_show = [];
	rank_show[0] = "get";
	rank_show[1] = "ok";
	rank_show[2] = 'cat';
	$.ajax({
		url : 'admin/ajax_140724022017.php',
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
			$.each(JSON.parse(data), function(i, field) {
				v2 += "<option value=\""+field.RK_ID+"\">" + field.Rank + "</option>";
				s++;
			});
			$("#rank").html(v2);

		}
	});


}
$("#save_creds").click(function(){
	var fname = $("#fname").val();
	var lname = $("#lname").val();
	var gender = $("#gender").val();
	var age = $("#age").val();
	var rank = $("#rank").val();
	var station = $("#station").val();
	var tenure = $("#tenure").val();
	var m_stat = $("#m_stat").val();
	var armnumber = $("#armnumber").val();
	var noc = $("#noc").val();
	var nocs = $("#nocs").val();
	if(age == "" || rank == "" || station == "" || m_stat == "" || noc == "" || nocs == "" || tenure == ""){
		alert("Please enter the mandetory details!");
	}
	else if(nocs > noc){
		alert("Children in school cannot be greater than number of children");
	}
	else if(age <= 0){
		alert("Wrong age input!!");
	}
	else if(tenure <=0 ){
		alert("Wrong Tenure.");
	}
	else{
	cread_data_save = [];
	cread_data_save[0] = fname;
	cread_data_save[1] = lname;
	cread_data_save[2] = gender;
	cread_data_save[3] = age;
	cread_data_save[4] = rank;
	cread_data_save[5] = station;
	cread_data_save[6] = m_stat;
	cread_data_save[7] = armnumber;
	cread_data_save[8] = noc;
	cread_data_save[9] = nocs;
	cread_data_save[10] = tenure;
	
	$.ajax({
		url: "admin/ajax_140724022017.php",
		method: "post",
		data: {cread_data_save:cread_data_save},
		beforeSend:function(msg){},
		afterSend:function(msg){},
		success:function(msg){
			if(msg==1){ window.location.replace("take_survey.php");}
			
		else {
			alert(msg);
			$("#frm"+d)[0].reset();
			window.location.replace("index.php");
		}
		}
		});
	
	}
});