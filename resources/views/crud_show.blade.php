@include('navbar')

<!------ Include the above in your HEAD tag ---------->
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <button type="button" class="btn btn-success" ><a href="crud_create" class="text-warning">Add record</a></button>

 <div class="x" style="overflow-x:auto;">
	<div class="row" >
	<table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr >

                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Mother Name</th>
                <th scope="col">DOB</th>
                <th scope="col">NID</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Action</th>


            </tr>
        </thead>

        @foreach ($crudsArr as $cruds)
        <tbody>
            <tr class="text-muted bg-light" >

                <th scope="col">{{$cruds->id}}</th>
                <th scope="col">{{$cruds->name}}</th>
                <th scope="col">{{$cruds->father_name}}</th>
                <th scope="col">{{$cruds->mother_name}}</th>
                <th scope="col">{{$cruds->dob}}</th>
                <th scope="col">{{$cruds->nid}}</th>
                <th scope="col">{{$cruds->address}}</th>
                <th scope="col">{{$cruds->sex}}</th>
                <th scope="col">{{$cruds->mobile_no}}</th>
                <th scope="col">
                    <button class="btn btn-info" ><a href="crud_delete/{{$cruds->id}}" class="text-light">Delete</a></button>
                    <button class="btn btn-info" ><a href="crud_edit/{{$cruds->id}}" class="text-light">Edit</a></button>
                </th>
            </tr>

        </tbody>
        @endforeach

    </table>

	</div>

</div>
<script>
       $(document).ready(function() {
       $('#example').DataTable(
         {
            "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
            "iDisplayLength": 5
       }
        );
} );
</script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</body>
