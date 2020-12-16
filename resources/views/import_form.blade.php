<form action="{{route('gp.import')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <input type="file" name="file"/>
    <input type="submit" value="upload">
</form>



