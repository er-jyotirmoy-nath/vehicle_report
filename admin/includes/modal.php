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


<div class="modal fade" id="maintain_form" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"
                 style="background-color: #f44336; border-color: #f44336;">
                <button type="button" class="close" data-dismiss="modal" style="color: white;">×</button><!-- Cross button on right of header to close the pop up -->
                <h4 class="modal-title" style="color: white;">Register a new Vehicle</h4>
            </div>
            <div class="modal-body"><!-- Contents of the popup  -->
               <form id="register_form1">
                    <table class="table table-bordered"><!-- To show a  table with border -->
                        <tbody>
                        
                            <tr>
                                <td><label>BA Number:</label></td>
                                <td><input name="BA_no_sel" readonly="readonly" id="BA_no_sel" type="text" class="form-control"
                                           ></td>
                                <td><label>Vehicle Number:</label></td>
                                <td><select  id="veh_num" class="form-control">
                                        <option>Loading</option>

                                    </select></td>
                            </tr>


                            <tr>
                                <td><label>Oil Change Date:<font style="color: red;">*</font></label></td>
                                <td><input type="date" class="form-control" id="oil_ch_dt"></td>
                                <td><label>Oil Change Km.:<font style="color: red;">*</font></label></td>
                                <td><input name="oil_ch_km" id="oil_ch_km" type="text" class="form-control" value="" ></td>
                            </tr>


                            <tr>
                                <td><label>Air Filter Date:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="date" id="air_filter_dt" class="form-control">	
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                                <td><label>Air Filter Km.:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="text" id="air_filter_km" class="form-control">
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                            </tr>

                            <tr>
                                <td><label>Fuel Filter Date:<font style="color: red;">*</font></label></td>
                                <td><input name="fuel_filter_dt" id="fuel_filter_dt" type="date" class="form-control"
                                           value="" size="30"></td>
                                <td><label>Fuel Filter Km.:<font style="color: red;">*</font></label></td>
                                <td><input name="fuel_filter_km" id="fuel_filter_km" type="text" class="form-control"
                                           value="" size="30"></td>
                            </tr>
                            <tr>
                                <td><label>Battery Change Date:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="date" id="bty_chg_dt" class="form-control">
                                </td>
                                <td><label>Oil Change Date:<font style="color: red;">*</font></label></td>
                                <td><input name="steering_oil_dt" id="steering_oil_dt" type="date"
                                           class="form-control" value="" ></td>
                            </tr>



                       


                        </tbody>
                    </table>
                 </form>
                <span id="res_res"></span>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-primary" id="save_maintain">Save</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tire_form" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"
                 style="background-color: #f44336; border-color: #f44336;">
                <button type="button" class="close" data-dismiss="modal" style="color: white;">×</button><!-- Cross button on right of header to close the pop up -->
                <h4 class="modal-title" style="color: white;">Register a new Vehicle</h4>
            </div>
            <div class="modal-body"><!-- Contents of the popup  -->
               <form id="register_form2">
                    <table class="table table-bordered"><!-- To show a  table with border -->
                        <tbody>
                        
                            <tr>
                                <td><label>Tire Id:</label></td>
                                <td><input name="tyre_id"  id="tyre_id" type="text" class="form-control"
                                           ></td>
                                <td><label>Vehicle Number:</label></td>
                                <td><select  id="veh_num_tire" class="form-control">
                                        <option>Loading</option>

                                    </select></td>
                            </tr>

                   


                            <tr>
                                <td><label>Tire Change Date:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="date" id="tyre_chg_dt" class="form-control">	
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                                <td><label>Tire Change Km.:<font style="color: red;">*</font></label></td>
                                <td>
                                    <input type="number" id="tyre_chg_km" class="form-control">
                                    <!-- All the information under the drop down is coming through java script and php -->
                                </td>
                            </tr>

                         <tr>
                                <td><label>Tire Number:<font style="color: red;">*</font></label></td>
                                <td><input type="number" class="form-control" id="tyre_num"></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </tbody>
                    </table>
                 </form>
                <span id="res_res"></span>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-primary" id="save_tire">Save</button>
            </div>
        </div>
    </div>
</div>