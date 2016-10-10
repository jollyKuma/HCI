      <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
        
        <script src="vendors/bootgrid/jquery.bootgrid.fa.js"></script>
         <script src="vendors/bootgrid/jquery.bootgrid.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

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
            });
        </script>

        <script src="js/app.min.js"></script>
         </div>    
    </body>
</html>
