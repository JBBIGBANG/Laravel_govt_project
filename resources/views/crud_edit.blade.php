<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<button class="btn btn-success"><a href="crud_show" class="text-warning">Back</a></button>

<div class="container">

<form class="form-horizontal" method='POST' action="{{route('crud_update',[$crudsArr->id])}}">
      @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$crudsArr->name}}">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="father_name">Father Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="father_name" placeholder="Enter Father name" name="father_name" value="{{$crudsArr->father_name}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="mother_name">Mother Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mother_name" placeholder="Enter mother_name" name="mother_name" value="{{$crudsArr->mother_name}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dob">DOB:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="dob" placeholder="Enter date of birth" name="dob" value="{{$crudsArr->dob}}">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nid">NID:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nid" placeholder="Enter NID" name="nid" value="{{$crudsArr->nid}}">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="address">Address:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$crudsArr->address}}">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="gender">Gender:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value="{{$crudsArr->sex}}">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile_no">Mobile No:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mobile_no" placeholder="Enter mobile_no" name="mobile_no" value="{{$crudsArr->mobile_no}}">
        </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
