@extends('user.includes.master')
@section('title', 'Membership Status')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                                <h3 class="card-title">Membership > Status</h3>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>NAME</th>
                                                <th>MONTH</th>
                                                <th>STATUS</th>
                                                <th>TOTAL SPENT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Anas</td>
                                                <td>May</td>
                                                <td>Pending</td>
                                                <td>$110</td>
                                                <td class="p-l-0 p-r-0 action">
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-edit"></i> </button>
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-trash"></i></button>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Anas</td>
                                                <td>May</td>
                                                <td>Approved</td>
                                                <td>$110</td>
                                                <td class="p-l-0 p-r-0 action">
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-edit"></i> </button>
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-trash"></i></button>
                                                </td>                                                
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
@section('addScript')
    <script src="{{URL::to('/public/admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
      <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>
@endsection
