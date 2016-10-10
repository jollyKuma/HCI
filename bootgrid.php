<head>
    <!-- link datatables css -->
    <link rel="stylesheet" type="text/css" href="/path/to/jquery.dataTables.css">
</head>
<body>

    <table id="empTable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Office</th>
            <th>Extension</th>
            <th>Joining Date</th>
            <th>Salary</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Office</th>
            <th>Extension</th>
            <th>Joining Date</th>
            <th>Salary</th>
        </tr>
    </tfoot>
</table>

    <!-- load jquery -->
    <script type="text/javascript" src="/path/to/jquery-1.10.2.js"></script>
    <!-- load datatables js library -->
    <script type="text/javascript" src="/path/to/jquery.dataTables.js"></script>
    <script type="text/javascript">
$( document ).ready(function() {
    $('#empTable').dataTable({
        "ajax": "empdata.json",
        "columns": [
            {"data": "name"},
            {"data": "designation"},
            {"data": "office"},
            {"data": "extension"},
            {"data": "joining_date"},
            {"data": "salary"}
        ]
    });   
});
</script>
</body>
</html>