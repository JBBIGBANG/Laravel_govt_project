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
<button class="btn btn-success"> <a href="socialServiceShow" class="text-warning">Back</a></button>

<div class="container">

  <form class="form-horizontal" method='POST' action="socialService_submit">
      @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="father_name">Father Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="father_name" placeholder="Enter Father name" name="father_name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="mother_name">Mother Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mother_name" placeholder="Enter mother_name" name="mother_name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dob">DOB:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="dob" placeholder="Enter date of birth" name="dob">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nid">NID:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nid" placeholder="Enter NID" name="nid">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="district">District:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="district" placeholder="Enter district" name="district">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="upozilla">Upozilla:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="upozilla" placeholder="Enter upozilla" name="upozilla">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="village">Village:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="village" placeholder="Enter Village" name="Village">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="post_office">Post-Office</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="post_office" placeholder="Enter post_office" name="Post-office">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="union">Union:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="union" placeholder="Enter Union" name="Union">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="activities">Activities:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="activities" placeholder="Enter activities" name="activities">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="gender">Gender:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile_no">Mobile No:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mobile_no" placeholder="Enter mobile_no" name="mobile_no">
        </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
