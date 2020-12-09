@include('navbar')
<html>
    <head>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>



    <form action="{{route('excel')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="file" name="file"/>
            <input type="submit" value="upload">
        </form>



     {{session('msg')}}
        <button type="button" class="btn btn-success" ><a href="crud_create" class="text-warning">Add record</a></button>
        <table class="table table-dark table-bordered">
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
                <tr class="text-muted bg-light">
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
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
