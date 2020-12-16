    @include('navbar')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/table.js"></script>

    <!------ Include the above in your HEAD tag ---------->


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>

        <button type="button" class="btn btn-success" ><a href="fisheris_create" class="text-warning">Add record</a></button>
    <div class="x" style="overflow-x:auto;">
        <div class="row" >
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr style="overflow-x:auto;">
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">NID</th>
                        <th scope="col">Village</th>
                        <th scope="col">Post_office</th>
                        <th scope="col">Union</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                    @foreach ($fishermanArr as $fisherman)
                        <tbody>
                            <tr class="text-muted bg-light">
                                <th scope="col">{{$fisherman->id}}</th>
                                <th scope="col">{{$fisherman->name}}</th>
                                <th scope="col">{{$fisherman->father_name}}</th>
                                <th scope="col">{{$fisherman->mother_name}}</th>
                                <th scope="col">{{$fisherman->dob}}</th>
                                <th scope="col">{{$fisherman->nid}}</th>
                                <th scope="col">{{$fisherman->village}}</th>
                                <th scope="col">{{$fisherman->post_office}}</th>
                                <th scope="col">{{$fisherman->union}}</th>
                                <th scope="col">{{$fisherman->sex}}</th>
                                <th scope="col">{{$fisherman->mobile_no}}</th>
                                <th>
                                    <a href="fisheris_edit/{{$fisherman->id}}"><i class="fa fa-edit" style="font-size:30px;"></i></a>
                                    <a href="fisheris_delete/{{$fisherman->id}}"><i class="fa fa-trash-o" style="font-size:30px; color:red""></i></i></a>
                                </th>
                            </tr>

                        </tbody>
                    @endforeach

            </table>
        </div>

    </div>

    <div class="inp">
        <div class="container" >
            <div class="row">
              <div class="col text-center">
                <button type="button" class="btn btn-info" ><a href="fisheris_create" class="text-warning">Add record</a></button>
            </div>
            </div>
          </div>

        <input type="file"  value="file" class="n">
        <input type="submit" value="submit" class="n">
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


                function checkAll(bx) {
                var cbs = document.getElementsByTagName('input');
                for(var i=0; i < cbs.length; i++) {
                    if(cbs[i].type == 'checkbox') {
                    cbs[i].checked = bx.checked;
                    }
                }
                }
        </script>
</body>
