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
	
getdata_class();
getdata_type();

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
	if(b != c){alert("Passwod Donot match");}
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

function getdata_class() {
	var v1 = '';
	class_show = [];
	class_show[0] = "get";
	class_show[1] = "ok";
	class_show[2] = 'cat';
	$.ajax({
		url : 'admin/ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			class_show : class_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				v1 += "<option value=\""+field.class_id+"\">" + field.class_id + "</option>";
				s++;
			});
			$("#veh_class").html(v1);

		}
	});


}

function getdata_type() {
	var v2 = '';
	type_show = [];
	type_show[0] = "get";
	type_show[1] = "ok";
	type_show[2] = 'cat';
	$.ajax({
		url : 'admin/ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			type_show : type_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(JSON.parse(data), function(i, field) {
				v2 += "<option value=\""+field.veh_type+"\">" + field.veh_type + "</option>";
				s++;
			});
			$("#veh_type").html(v2);

		}
	});


}
$("#save_creds").click(function(){
	var BA_no = $("#BA_no").val();
	var veh_type = $("#veh_type").val();
	var veh_class = $("#veh_class").val();
	var dt_mfr = $("#dt_mfr").val();
	var dt_induction = $("#dt_induction").val();
	var dt_takingover = $("#dt_takingover").val();
	var engine_no = $("#engine_no").val();
	var chassis_no = $("#chassis_no").val();
	var km_engine = $("#km_engine").val();
	var km_chassis = $("#km_chassis").val();
	
        if(BA_no == "" ){
		alert("Please enter the mandetory details!");
	}
	
	else{
	veh_data_save = [];
	veh_data_save[0] = BA_no;
	veh_data_save[1] = veh_type;
	veh_data_save[2] = veh_class;
	veh_data_save[3] = dt_mfr;
	veh_data_save[4] = dt_induction;
	veh_data_save[5] = dt_takingover;
	veh_data_save[6] = engine_no;
	veh_data_save[7] = chassis_no;
	veh_data_save[8] = km_engine;
	veh_data_save[9] = km_chassis;
	$.ajax({
		url: "admin/ajax_140724022017.php",
		method: "post",
		data: {veh_data_save:veh_data_save},
		beforeSend:function(msg){},
		afterSend:function(msg){},
		success:function(msg){
			if(msg==1){ 
                            $("#res_res").html('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                                                '<strong>Success!</strong> Your Vehicle has been registered. You can now find your vehicle and get all details.</div>');
                                    $("#register_form")[0].reset();
                    }
			
		else {
			alert(msg);
			$("#frm"+d)[0].reset();
			window.location.replace("index.php");
		}
		}
		});
	
	}
});