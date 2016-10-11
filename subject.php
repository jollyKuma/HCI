<?php include'includes/header.php';?>
<?php include'includes/topnav.php';?>

<div class="card" style="margin-top:5%">
   <div class="card-header">
      <h2 class="text-center">First Semester S.Y 2016-2017<span class="c-orange">(Midterm)</span>
      </h2>
     
   </div>
     <ol class="breadcrumb" style="margin-left:-290px">
                <li><a href="#">Home</a></li>
                <li><a href="dashboard.php">Loads</a></li>
                <li><a class="active c-blue" href="#">ITFUND11-LEC</a></li>
            </ol>
             <button class="btn bgm-red btn-icon pull-right"><i class="zmdi zmdi-print "></i></button>
   <table id="data-table-command" class="table table-striped table-vmiddle"  >
      <thead>
         <tr>
            <th data-column-id="seq" data-width="10%">Seq #</th>
            <th data-column-id="student" data-width="10%">Student ID</th>
            <th data-column-id="lastname">Lastname</th>
            <th data-column-id="firstname">Firstname</th>
            <th data-column-id="mi">M.I.</th>
            <th data-column-id="course">Course</th>
            <th data-column-id="year">Year</th>
            <th data-column-id="midterm">Midterm Grade</th>
            <th data-column-id="final">Final Grade</th>
            <th data-column-id="remarks">Remarks</th>
            <th data-column-id="warning">Warning</th>
         </tr>
      </thead>
      <tbody>
        <tr>
                <td>19372</td>
                <td>ITFUND11- LEC</td>
                <td>4:30PM - 5:30PM</td>
                <td>MW</td>
                <td>530B</td>
                <td>IT</td>
                <td>3.0</td>
                <td>48</td>
                <td>APPROVED</td>
        </tr>      
          <tr>
                <td>20438</td>
                <td>COMORG21- LEC</td>
                <td>11:30AM - 12:30PM</td>
                <td>MWF</td>
                <td>614</td>
                <td>IT</td>
                <td>3.0</td>
                <td>49</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>20578</td>
                <td>COMORG21- LEC</td>
                <td>8:30AM - 9:30PM</td>
                <td>MWF</td>
                <td>537</td>
                <td>IT</td>
                <td>3.0</td>
                <td>50</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>20602</td>
                <td>COMORG21- LEC</td>
                <td>1:30PM - 2:30PM</td>
                <td>MWF</td>
                <td>613</td>
                <td>IT</td>
                <td>3.0</td>
                <td>47</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>20792</td>
                <td>COMORG21- LEC</td>
                <td>1:30PM - 3:00PM</td>
                <td>TTH</td>
                <td>537</td>
                <td>IT</td>
                <td>3.0</td>
                <td>47</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>20909</td>
                <td>COMORG21- LEC</td>
                <td>3:00PM - 4:30PM</td>
                <td>TTH</td>
                <td>614</td>
                <td>IA</td>
                <td>3.0</td>
                <td>47</td>
                <td>APPROVED</td>
        </tr>
                <tr>
                <td>20905</td>
                <td>COMORG21- LEC</td>
                <td>1:00PM - 3:00PM</td>
                <td>TTH</td>
                <td>614</td>
                <td>IT</td>
                <td>3.0</td>
                <td>50</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>20933</td>
                <td>COMORG21- LEC</td>
                <td>9:30AM - 10:30AM</td>
                <td>MWF</td>
                <td>614</td>
                <td>IA</td>
                <td>3.0</td>
                <td>45</td>
                <td>APPROVED</td>
        </tr>
         <tr>
                <td>40933</td>
                <td>OPSYS</td>
                <td>4:30AM - 5:30PM</td>
                <td>MWF</td>
                <td>538</td>
                <td>IT</td>
                <td>3.0</td>
                <td>39</td>
                <td>APPROVED</td>
        </tr>
        <tr>
                <td>30933</td>
                <td>OPSYS</td>
                <td>4:00AM - 5:30PM</td>
                <td>TTH</td>
                <td>538</td>
                <td>IT</td>
                <td>3.0</td>
                <td>35</td>
                <td>APPROVED</td>
        </tr>
              <tr>
                <td>30933</td>
                <td>FREEELHCI</td>
                <td>5:00AM - 6:30PM</td>
                <td>TTH</td>
                <td>536</td>
                <td>IT</td>
                <td>3.0</td>
                <td>40</td>
                <td>APPROVED</td>
        </tr>

      </tbody>
   </table>
</div>
</div>
</section>
</section>

<div class="modal fade" id="modalNarrower" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog ">
      <div class="modal-content">
         <div class="modal-header ">
            <h4 class="modal-title text-center">Change Term</h4>
         </div>
         <div class="modal-body">
            <div class="row">
                <div class="col-sm-12 m-b-15">
                        <p class="f-500 c-black m-b-15">School Term</p>
                        <select class="chosen" data-placeholder="Choose a School Term...">
                            <option value="5">1st Semester S.Y 2015-2016</option>
                            <option value="6">2nd Semester S.Y 2014-2015</option>
                            <option value="7">1st Semester S.Y 2013-2014</option>
                            <option value="8">2nd Semester S.Y 2012-2013</option>
                            <option value="8">1st Semester S.Y 2011-2012</option>
                            <option value="8">2nd Semester S.Y 2010-2011</option>
                            <option value="8">1st Semester S.Y 2009-2010</option>
                            <option value="8">2nd Semester S.Y 2008-2009</option>
                            
                        </select>
                    </div>
                <div class="col-sm-12 m-b-25">
                    <p class="f-500 m-b-15 c-black">Grading Period</p>
                    <select class="selectpicker">
                        <option>Midterm</option>
                        <option>Finals</option>
                    </select>
                </div>
            </div>
        
         <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-link" data-dismiss="modal">Close
            </button>
         </div>
      </div>
   </div>
</div>
</div>
<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header ">
            <h4 class="modal-title text-center">Change Password</h4>
         </div>
         <div class="modal-body">
            <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="Old Password">
                        </div>
                        <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon"></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="Confirm">
                        </div>
                        <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                    </div>
            </div>
            </div>
            </div>
        
         <div class="modal-footer">
            <button type="button" class="btn btn-primary">Confirm</button>
            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel
            </button>
         </div>
      </div>
   </div>
</div>
</div>

   <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
<!-- Transfer to footer then -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
        
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
        <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
        <script src="vendors/summernote/dist/summernote-updated.min.js"></script>
         <script src="vendors/bower_components/chosen/chosen.jquery.js"></script>
        <script src="vendors/fileinput/fileinput.min.js"></script>
        <script src="vendors/input-mask/input-mask.min.js"></script>
        <script src="vendors/farbtastic/farbtastic.min.js"></script>


        

<script src="vendors/bootgrid/jquery.bootgrid.fa.js"></script>
<script src="vendors/bootgrid/jquery.bootgrid.js"></script>
<!-- Data Table -->
<script type="text/javascript">
    $(document).ready(function(){

        //Command Buttons
        // WILL GET THE DATA.JSON FILE AND LOAD THE DETAILS TO DISPLAY INTO THE TABLE
        $("#data-table-command").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-sort-amount-desc',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-sort-amount-asc'           
            },
            formatters: {
                    "commands": function(column, row) {
                    return "<button onclick=\"window.location.href='subject.php'\" type=\"button\" class=\"btn btn-sm bgm-green command-edit waves-effect\" data-row-id=\"" + row.id + "\">View</button> " ;
                }
            }
        });
    
    });
</script>  

<script src="js/app.min.js"></script>

</div>    
</body>
</html>
