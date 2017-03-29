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
                                    onclick="login(document.getElementById('admin-name-id').value, document.getElementById('admin-pass-id').value, 'admin', 1)">Go</button>
                        </form>

            


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
                <h4 class="modal-title" style="color: white;">Register a new Vehicle</h4>
            </div>
            <div class="modal-body"><!-- Contents of the popup  -->
               <form id="register_form">
                    <table class="table table-bordered"><!-- To show a  table with border -->
                        <tbody>
                        
                            <tr>
                                <td><label>BA Number:</label></td>
                                <td><input name="BA_no" id="BA_no" type="text" class="form-control"
                                           value="" ></td>
                                <td><label>Vehicle Type:</label></td>
                                <td><select  id="veh_type" class="form-control">
                                        <option>Loading</option>

                                    </select></td>
                            </tr>


                            <tr>
                                <td><label>Class:<font style="color: red;">*</font></label></td>
                                <td><select id="veh_class" class="form-control">
                                        <option>Loading</option>

                                    </select></td>
                                <td><label>Date of Mfg:<font style="color: red;">*</font></label></td>
                                <td><input name="dt_mfr" id="dt_mfr" type="date" class="form-control" value="" ></td>
                            </tr>


                            <tr>
                                <td><label>Date of Induction:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="date" id="dt_induction" class="form-control">	
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                                <td><label>Takeover Date:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="date" id="dt_takingover" class="form-control">
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                            </tr>

                            <tr>
                                <td><label>Engine No.:<font style="color: red;">*</font></label></td>
                                <td><input name="engine_no" id="engine_no" type="text" class="form-control"
                                           value="" size="30"></td>
                                <td><label>Chassis No.:<font style="color: red;">*</font></label></td>
                                <td><input name="chassis_no" id="chassis_no" type="text" class="form-control"
                                           value="" size="30"></td>
                            </tr>
                            <tr>
                                <td><label>Engine Kms.:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="number" id="km_engine" class="form-control">
                                </td>
                                <td><label>Chassis Kms.:<font style="color: red;">*</font></label></td>
                                <td><input name="km_chassis" id="km_chassis" type="number"
                                           class="form-control" value="" ></td>
                            </tr>



                       


                        </tbody>
                    </table>
                 </form>
                <span id="res_res"></span>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-primary" id="save_creds">Register</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mtddetails" tabindex="-1" role="dialog" aria-labelledby="mtddetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mtddetailsModalLabel">Maintenance Details</h5>
          
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Vehicle Id:</label>
            <input type="text" class="form-control" id="vehicle_id">
          </div>
          <div class="row">
              <div class="col-sm-4">
              <label>Oil Details</label>
                <table class="table table-bordered">
                        <thead><tr>
                               
                                 <th>Change Date</th>
                                  <th>Kilometers</th>
                                  <th>Exp Date</th>
                                
                    </tr></thead>
                        <tbody id="oil_details">
                            
                        </tbody>
            </table>
              </div>
              <div class="col-sm-4">
               <label>Air Details</label>
                 <table class="table table-bordered">
                        <thead><tr>
                               
                                
                                  <th>Change Date</th>
                                  <th>Kilometers</th>
                                  <th>Exp Date</th>
                    </tr></thead>
                        <tbody id="air_details">
                            
                        </tbody>
            </table>
              </div>
              <div class="col-sm-4">
                <label>Fuel Details</label>
                 <table class="table table-bordered">
                        <thead><tr>
                               
                                 
                                  <th>Change Date</th>
                                  <th>Kilometers</th>
                                  <th>Exp Date</th>
                                  
                    </tr></thead>
                        <tbody id="fuel_details">
                            
                        </tbody>
            </table>
              </div> 

            </div>

            <div class="row">
              <div class="col-sm-4">
                <label>Battery Details</label>
                 <table class="table table-bordered">
                        <thead><tr>
                               
                                 <th>Change Date</th>
                                 <th>Exp Date</th>
                                  
                    </tr></thead>
                        <tbody id="btr_details">
                            
                        </tbody>
            </table>
              </div>
              <div class="col-sm-4">
                <label>Steering Wheel Details</label>
                <table class="table table-bordered">
                        <thead><tr>
                               
                                 <th>Change Date</th>
                                 <th>Exp Date</th>
                                  
                    </tr></thead>
                        <tbody id="ster_details">
                            
                        </tbody>
            </table>
              </div>
              <div class="col-sm-4">
                <label>Tire Details</label>
                <table class="table table-bordered">
                        <thead><tr>
                                  <th>Tire Number</th>
                                 <th>Change Date</th>
                                 <th>Exp Date</th>
                                  
                    </tr></thead>
                        <tbody id="tire_details">
                            
                        </tbody>
            </table>
              </div>
            </div>
           
           
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
<script>
    $('#mtddetails').on('show.bs.modal', function (event) {
        str_res = '';
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient1 = button.data('baid');
  var recipient = button.data('vehid');// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
 
  modal.find('.modal-body input').val(recipient1);
  oil_dtls(recipient);
  air_dtls(recipient);
  fuel_dtls(recipient);
  battery_dtls(recipient);
  steering_dtls(recipient);
  tire_details(recipient);
});
</script>
<script type="text/javascript">
  function oil_dtls(vid){
    oil_res = '';
    send_data = [];
  send_data[0] = vid;
  $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data:send_data},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              oil_res += '<tr>'+
                      '<td>'+field.oil_ch_dt+'</td>'+
                      '<td>'+field.oil_ch_km+'</td>'+
                      '<td>'+field.oil_ch_exp+'</td>'+                     
                      '</tr>';
          });
          $('#oil_details').html(oil_res);
      }
  });
  }
</script>
<script type="text/javascript">
  function air_dtls(vid){
    air_res = '';
    send_data = [];
  send_data[0] = vid;
  $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data:send_data},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              air_res += '<tr>'+
                      '<td>'+field.air_filter_dt+'</td>'+
                      '<td>'+field.air_filter_km+'</td>'+
                      '<td>'+field.air_filter_exp+'</td>'+                     
                      '</tr>';
          });
          $('#air_details').html(air_res);
      }
  });
  }
</script>
<script type="text/javascript">
  function fuel_dtls(vid){
    fuel_res = '';
    send_data = [];
  send_data[0] = vid;
  $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data:send_data},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              fuel_res += '<tr>'+
                      '<td>'+field.fuel_filter_dt+'</td>'+
                      '<td>'+field.fuel_filter_km+'</td>'+
                      '<td>'+field.fuel_filter_exp+'</td>'+                     
                      '</tr>';
          });
          $('#fuel_details').html(fuel_res);
      }
  });
  }
</script>
<script type="text/javascript">
  function battery_dtls(vid){
    battery_res = '';
    send_data = [];
  send_data[0] = vid;
  $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data:send_data},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              battery_res += '<tr>'+
                      '<td>'+field.bty_chg_dt+'</td>'+
                      '<td>'+field.bty_chg_exp+'</td>'+
                      '</tr>';
          });
          $('#btr_details').html(battery_res);
      }
  });
  }
</script>
<script type="text/javascript">
  function steering_dtls(vid){
    steering_res = '';
    send_data = [];
  send_data[0] = vid;
  $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data:send_data},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              steering_res += '<tr>'+
                      '<td>'+field.steering_oil_dt+'</td>'+
                      '<td>'+field.steering_oil_exp+'</td>'+
                      '</tr>';
          });
          $('#ster_details').html(steering_res);
      }
  });
  }
</script>
<script>
function tire_details(a)
{
    /* '<td>'+field.air_filter_km+'</td>'+
                      '<td>'+field.fuel_filter_dt+'</td>'+
                      '<td>'+field.fuel_filter_km+'</td>'+
                      '<td>'+field.bty_chg_dt+'</td>'+
                      '<td>'+field.steering_oil_dt+'</td>'+*/

      send_data_tire = [];
      send_data_tire[0] = a;
      tire_str = '';
      $.ajax({
      url:"admin/ajax_140724022017.php",
      method:"POST",
      data:{send_data_tire:send_data_tire},
      beforeSend:function(msg){},
      afterSend:function(msg){},
      success:function(msg){
          $.each(JSON.parse(msg),function(i,field){
              tire_str += '<tr>'+
                      '<td>'+field.tyre_number+'</td>'+
                      '<td>'+field.tyre_chg_dt+'</td>'+
                      '<td>'+field.tyre_ch_exp+'</td>'+
                      '</tr>';
          });
          $('#tire_details').html(tire_str);
      }
  });
}
</script>