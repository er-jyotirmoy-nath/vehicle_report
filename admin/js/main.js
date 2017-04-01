/**
 * 
 */
$(document).ready(function () {

    getdata_veh_id("get", "all", "all");
    getdata_maintain("get", "all", "all");
    getdata_tire("get", "all", "all");
    getdata_alert("get","all","all");
});
$('#tire_form').on('show.bs.modal', function (event) {
    $("#register_form2")[0].reset();
    getvehicle_number('veh_num_tire');
    
 });
$('#maintain_form').on('show.bs.modal', function (event) {
    $("#register_form1")[0].reset();
    getvehicle_number('veh_num');
    getvehicle_ba();
 });
$('#survey_form').on('show.bs.modal', function (event) {
 $("#register_form")[0].reset();
    getdata_class();
    getdata_type();

});
function getdata_veh_id(a, b, c) {
    var v1 = '';
    veh_show = [];
    veh_show[0] = a;
    veh_show[1] = b;
    veh_show[2] = c;
    $.ajax({
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            veh_show: veh_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                

                v1 += '<tr><td> ' + field.BA_no + '</td>' +
                        '<td>' + field.chassis_no + '</td>' +
                        '<td>' + field.veh_type + '</td>' +
                        '<td>' + field.dt_mfr + '</td>' +
                        '<td>' + field.dt_induction + '</td>' +
                        '<td>' + field.dt_takingover + '</td>'
                        + '<td>' + field.class + '</td>' +
                        '<td>' + field.km_engine + '</td>' +
                        '<td>' + field.km_chassis + '</td>' +
                        '<td>' + field.engine_no + '</td>' +
                        '</tr>';
                s++;
               
            });
            $("#first_load_table").html(v1);

        }
    });


}
function getdata_maintain(a, b, c) {
    var v1 = '';
    maintain_show = [];
    maintain_show[0] = a;
    maintain_show[1] = b;
    maintain_show[2] = c;
    $.ajax({
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            maintain_show: maintain_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                

                v1 += '<tr><td> ' + field.veh_id + '</td>' +
                        '<td>' + field.BA_no + '</td>' +
                        '<td>' + field.oil_ch_dt + '</td>' +
                        '<td>' + field.oil_ch_km + '</td>' +
                         '<td>' + field.oil_ch_exp + '</td>' +
                        '<td>' + field.air_filter_dt + '</td>' +
                        '<td>' + field.air_filter_km + '</td>'+
                        '<td>' + field.air_filter_exp + '</td>'
                        + '<td>' + field.fuel_filter_dt + '</td>' +
                        '<td>' + field.fuel_filter_km + '</td>' +
                        '<td>' + field.fuel_filter_exp + '</td>' +
                        '<td>' + field.bty_chg_dt + '</td>' +
                        '<td>' + field.bty_chg_exp + '</td>' +
                        '<td>' + field.steering_oil_dt + '</td>' +
                        '<td>' + field.steering_oil_exp + '</td>' +
                        '</tr>';
                s++;
               
            });
            $("#maintain_table").html(v1);

        }
    });


}

function getdata_tire(a, b, c) {
    var v1 = '';
    tire_show = [];
    tire_show[0] = a;
    tire_show[1] = b;
    tire_show[2] = c;
    $.ajax({
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            tire_show: tire_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                

                v1 += '<tr><td> ' + field.tyre_id + '</td>' +
                        '<td>' + field.veh_id + '</td>' +
                        '<td>' + field.tyre_number + '</td>' +
                        '<td>' + field.tyre_chg_dt + '</td>' +
                        '<td>' + field.tyre_chg_km + '</td>' +
                        '<td>' + field.tyre_ch_exp + '</td>' +
                       
                        '</tr>';
                s++;
               
            });
            $("#tire_table").html(v1);

        }
    });


}



function getvehicle_number(a) {
    var v1 = '<option>Select Number</option>';
    number_show = [];
    number_show[0] = "get";
    number_show[1] = "ok";
    number_show[2] = 'cat';
    $.ajax({
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            number_show: number_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                v1 += "<option value=\"" + field.veh_id + "\">" + field.veh_id + "</option>";
                s++;
            });
            $("#"+a).html(v1);

        }
    });


}
$('#veh_num').change(function(){
    var d = $('#veh_num').val();
    getvehicle_ba(d);
});
function getvehicle_ba(a) {
    var v1 = '';
    ba_show = [];
    ba_show[0] = "get";
    ba_show[1] = a;
    ba_show[2] = 'cat';
    $.ajax({
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            ba_show: ba_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                v1 =  field.BA_no;
            });
            
            $("#BA_no_sel").val(v1);

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
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            class_show: class_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(jQuery.parseJSON(data), function (i, field) {
                v1 += "<option value=\"" + field.class_id + "\">" + field.class_id + "</option>";
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
        url: 'ajax_140724022017.php',
        type: "POST",
        datatype: "json",
        data: {
            type_show: type_show
        },
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (data) {

            console.log(data);
            var s = 1;
            $.each(JSON.parse(data), function (i, field) {
                v2 += "<option value=\"" + field.veh_type + "\">" + field.veh_type + "</option>";
                s++;
            });
            $("#veh_type").html(v2);

        }
    });


}
$("#save_tire").click(function () {
    var tyre_id = $("#tyre_id").val();
    var veh_num_tire = $("#veh_num_tire").val();
    var tyre_chg_dt = $("#tyre_chg_dt").val();
    var tyre_chg_km = $("#tyre_chg_km").val();
    var tyre_chg_exp = $("#tyre_chg_exp").val();
    var tyre_num = $("#tyre_num").val();
     
    
    if (tyre_id == "") {
        alert("Please enter the mandetory details!");
    } else {
        tire_data_save = [];
        tire_data_save[0] = tyre_id;
        tire_data_save[1] = veh_num_tire;
        tire_data_save[2] = tyre_chg_dt;
        tire_data_save[3] = tyre_chg_km;
        tire_data_save[4] = tyre_num;
        tire_data_save[5] = tyre_chg_exp;
        
        $.ajax({
            url: "ajax_140724022017.php",
            method: "post",
            data: {tire_data_save: tire_data_save},
            beforeSend: function (msg) {},
            afterSend: function (msg) {},
            success: function (msg) {
                if (msg == 1) {
                   getdata_tire("get", "all", "all");
                } else {
                    alert(msg);
                    
                }
            }
        });

    }
});



$("#save_maintain").click(function () {
    var BA_no_sel = $("#BA_no_sel").val();
    var veh_num = $("#veh_num").val();
    var oil_ch_dt = $("#oil_ch_dt").val();
    var oil_ch_km = $("#oil_ch_km").val();
    var oil_ch_exp = $("#oil_ch_exp").val();
    var air_filter_dt = $("#air_filter_dt").val();
    var air_filter_km = $("#air_filter_km").val();
    var air_filter_exp = $("#air_filter_exp").val();
    var fuel_filter_dt = $("#fuel_filter_dt").val();
    var fuel_filter_km = $("#fuel_filter_km").val();
     var fuel_filter_exp = $("#fuel_filter_exp").val();
    var bty_chg_dt = $("#bty_chg_dt").val();
    var bty_chg_exp = $("#bty_chg_exp").val();
    var steering_oil_dt = $("#steering_oil_dt").val();
    var steering_oil_exp = $("#steering_oil_exp").val();

    if (BA_no_sel == "") {
        alert("Please enter the mandetory details!");
    } else {
        man_data_save = [];
        man_data_save[0] = BA_no_sel;
        man_data_save[1] = veh_num;
        man_data_save[2] = oil_ch_dt;
        man_data_save[3] = oil_ch_km;
        man_data_save[4] = air_filter_dt;
        man_data_save[5] = air_filter_km;
        man_data_save[6] = fuel_filter_dt;
        man_data_save[7] = fuel_filter_km;
        man_data_save[8] = bty_chg_dt;
        man_data_save[9] = steering_oil_dt;
        man_data_save[10] = oil_ch_exp;
        man_data_save[11] = air_filter_exp;
        man_data_save[12] = fuel_filter_exp;
        man_data_save[13] = bty_chg_exp;
        man_data_save[14] = steering_oil_exp;
        $.ajax({
            url: "ajax_140724022017.php",
            method: "post",
            data: {man_data_save: man_data_save},
            beforeSend: function (msg) {},
            afterSend: function (msg) {},
            success: function (msg) {
                if (msg == 1) {
                   getdata_maintain("get", "all", "all");
                } else {
                    alert(msg);
                    
                }
            }
        });

    }
});






$("#save_creds").click(function () {
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

    if (BA_no == "") {
        alert("Please enter the mandetory details!");
    } else {
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
            url: "ajax_140724022017.php",
            method: "post",
            data: {veh_data_save: veh_data_save},
            beforeSend: function (msg) {},
            afterSend: function (msg) {},
            success: function (msg) {
                if (msg == 1) {
                   getdata_veh_id("get", "all", "all");
                } else {
                    alert(msg);
                    
                }
            }
        });

    }
});

function logout() {

    login = [];
    login[0] = "ok";
    login[1] = "set";
    login[2] = "now";
    login[3] = "logout";
    $.ajax({
        url: "ajax_140724022017.php",
        method: "post",
        data: {login: login},
        beforeSend: function (msg) {},
        afterSend: function (msg) {},
        success: function (msg) {
            if (msg) {
                window.location.replace("/Vehicle_Report/index.php");
            } else {
                alert(msg);
            }
        }
    });

}

function getdata_alert(a,b,c){
	v1 = '';
	alert_days = [];
	alert_days[0] = a;
	alert_days[1] = b;
	alert_days[2] = c;
	$.ajax({
		url:"ajax_140724022017.php",
		method:"POST",
		data:{alert_days:alert_days},
		beforeSend:function(){},
		afterSend:function(){},
		success:function(response_data){
			$.each(jQuery.parseJSON(response_data), function (i, field) {
	                

	                v1 += '<tr><td> ' + field.BA_no + '</td>' +
	                        '<td>' + field.oil_days + '</td>' +
	                        '<td>' + field.air_days + '</td>' +
	                        '<td>' + field.fuel_days + '</td>' +
	                         '<td>' + field.bttr_days + '</td>' +
	                        '<td>' + field.steer_days + '</td>' +
	                        
	                        '</tr>';
	              
	               
	            });
			$('#alert_load_table').html(v1);
		}
	});
}