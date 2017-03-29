/**
 * 
 */

$(document).ready(function() {
	
	getdata_veh_id("get","all","all");
});
$("#filter_chas").on("click",function(){
	var veh_id = $("#veh_chas").val();
	
	getdata_veh_id("get","bychassis",veh_id);
});
$("#filter_id").on("click",function(){
    var veh_id = $("#veh_id").val();
	getdata_veh_id('get','byvehnum',veh_id);
});


function getdata_veh_id(a,b,c) {
	var v1 = '';star=' <i class="fa fa-thumbs-up" aria-hidden="true" style="color:#f44336;"></i> ';v_star='';
	veh_show = [];
	veh_show[0] = a;
	veh_show[1] = b;
	veh_show[2] = c;
	$.ajax({
		url : 'admin/ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			veh_show : veh_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				if(s == 1){v1 += "<div class=\"row\">";}
				
				v1 += '<div class="col-lg-4"><div class="panel panel-success" style="border-color: #f44336;">'+
					'<div class="panel-heading1">'+
					'<i class="fa fa-car" aria-hidden="true"></i> '+field.BA_no+
                                        '  <label>Chassis No.: </label>'+ field.chassis_no + 
				'</div><div class="panel-body" style="min-height: 170px; text-align: left;">'+
                                '<div class="row"><div class="col-sm-6">'+
                                 '<label>Vehicle Type: </label> '+ field.veh_type + '<br>'+
                                '<label>D.O.M.: </label> '+ field.dt_mfr + '<br>'+
                                '<label>D.O.I.: </label> '+ field.dt_induction + '<br>'+
                                '<label>D.O.T..: </label> '+ field.dt_takingover + '<br>'
                                +'</div><div class="col-sm-6">'+
                              
                                '<label>Class.: </label> '+ field.class + '<br>'+
                                '<label>Engine KM.: </label> '+ field.km_engine + '<br>'+
                                '<label>Chassis KM.: </label> '+ field.km_chassis + '<br>'+
                                '<label>Engine No.: </label> '+ field.engine_no + '<br>'+
                                
				'</div></div></div><div class="panel-footer">'+
                                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mtddetails" data-baid="'+field.BA_no+'" data-vehid="'+field.veh_id+'">View Details</button>'+
                                    '</div></div></div>';
				s++;
				if(s > 3){v1 += "</div>";s = 1;}
			});
			$("#first_load").html(v1);

		}
	});


}
function printValue(sliderID, textbox) {
    var x = document.getElementById(textbox);
    var y = document.getElementById(sliderID);
    x.value = y.value;
}