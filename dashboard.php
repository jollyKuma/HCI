<?php include'includes/header.php';?>
<?php include'includes/topnav.php';?>
 <div class="card" style="margin-top:5%">
                        <div class="card-header">
                            <h2 class="text-center">First Semester S.Y 2016-2017<span class="c-orange">(Midterm)</span>
                            </h2>
                        </div>

                        <table id="data-table-command" class="table table-striped table-vmiddle" >
                            <thead>
                            <tr>
                                <th data-column-id="edpCode" data-type="numeric">EDP Code</th>
                                <th data-column-id="subject">Subject</th>
                                <th data-column-id="time" data-order="desc">Time</th>
                                <th data-column-id="days" data-order="desc">Days</th>
                                <th data-column-id="room" data-order="desc">Room</th>
                                <th data-column-id="dept" data-order="desc">Dept</th>
                                <th data-column-id="units" data-order="desc">Units</th>
                                <th data-column-id="size" data-order="desc">Size</th>                                
                                <th data-column-id="status">Status</th>
                                
                                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
  

      <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>  
 <div class="modal fade" id="modalNarrower" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales
                                                orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit
                                                amet tristique. Nullam scelerisque nunc enim, non dignissim nibh
                                                faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis
                                                ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis
                                                erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa
                                                egestas fringilla. Vestibulum egestas consectetur nunc at ultricies.
                                                Morbi quis consectetur nunc.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link">Save changes</button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
  <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-sort-amount-desc',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-sort-amount-asc'
                    },
                });

                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-sort-amount-desc',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-sort-amount-asc'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });

                //Command Buttons
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
                            return "<button type=\"button\" class=\"btn btn-sm bgm-green command-edit waves-effect\" data-row-id=\"" + row.id + "\">View</button> " ;
                        }
                    }
                });
                   $("#data-table-command").bootgrid({
                    ajax: true,
                    post: function ()
                    {
                        /* To accumulate custom parameter with the request object */
                        return {
                            id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                        };
                    },
                    url: "data.json",
                    formatters: {
                        "link": function(column, row)
                        {
                            return "<a href=\"#\">" + column.id + ": " + row.id + "</a>";
                        }
                    }
                });$("#data-table-command").bootgrid({
    ajaxSettings: {
        method: "GET",
        cache: false
    }
});

                    
            });
   </script>  
<?php include'includes/footer.php'?>
