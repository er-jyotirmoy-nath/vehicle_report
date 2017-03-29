/**
 * 
 */

$(document).ready(function() {
	
	getdata_stat();
	getdata_cat();
	getdata_stat_load("get","all","all");
});
$("#filter_cat").on("click",function(){
	var category = $("#cat-filter").val();
	
	getdata_stat_load("get","bycat",category);
});
$("#filter_loc").on("click",function(){
	var category = $("#stat-filter").val();
	
	var v3 = '';rating='';loc='';
	loc_show = [];
	loc_show[0] = "get";
	loc_show[1] = "byloc";
	loc_show[2] = category;
	$.ajax({
		url : 'admin/ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			loc_show : loc_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				rating += field.cat_name +' : '+ field.wieght_fac + '/10<br>';
				loc = field.station_name;
			});
			v3 = '<div class="col-lg-4"><div class="panel panel-success" style="border-color: #f44336;">'+
			'<div class="panel-heading1">'+
			'<i class="fa fa-map-pin" aria-hidden="true"></i> '+loc+
		'</div><div class="panel-body" style="min-height: 170px; "> Ratings<br> '+rating+
		'</div><div class="panel-footer"></div></div></div>';
			$("#first_load").html(v3);

		}
	});
	
});
function getdata_cat() {
	var v = '<option value="">Filter by Category</option>';
	cat_show = [];
	cat_show[0] = "get";
	cat_show[1] = "ok";
	cat_show[2] = 'cat';
	$.ajax({
		url : 'admin/ajax_140724022017.php',
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
				v += "<option value=\""+field.category_id+"\">" + field.category_name + "</option>";
				s++;
			});
			$("#cat-filter").html(v);

		}
	});


}
function getdata_stat() {
	var v1 = '<option value="">Filter by Location</option>';
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
			$("#stat-filter").html(v1);

		}
	});


}
function getdata_stat_load(a,b,c) {
	var v1 = '';star=' <i class="fa fa-thumbs-up" aria-hidden="true" style="color:#f44336;"></i> ';v_star='';
	loc_show = [];
	loc_show[0] = a;
	loc_show[1] = b;
	loc_show[2] = c;
	$.ajax({
		url : 'admin/ajax_140724022017.php',
		type : "POST",
		datatype : "json",
		data : {
			loc_show : loc_show
		},
		beforeSend : function(msg) {},
		afterSend : function(msg) {},
		success : function(data) {

			console.log(data);
			var s = 1;
			$.each(jQuery.parseJSON(data), function(i, field) {
				if(s == 1){v1 += "<div class=\"row\">";}
				v_star='';
					for(var i=0; i<field.wieght_fac;i++ ){
						v_star +=star; 
					}
				v1 += '<div class="col-lg-4"><div class="panel panel-success" style="border-color: #f44336;">'+
					'<div class="panel-heading1">'+
					'<i class="fa fa-map-pin" aria-hidden="true"></i> '+	field.station_name+
				'</div><div class="panel-body" style="min-height: 170px; text-align: center;"> Rating: '+ v_star +
				'</div><div class="panel-footer"></div></div></div>';
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