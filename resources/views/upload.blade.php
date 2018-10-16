<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>File Upload Manager</title>
    <link rel="stylesheet" href="css/app.css" charset="utf-8">
  </head>
  <body>
    <div class = "container">
      <h3 align='center'>File Upload Manager</h3>
      <form action="{{url('newfile')}}" enctype="multipart/form-data" method="post">
        <div class = "form-group">
          <input type="file" class = "form-control" name="fileUpload">
        </div>
        {{csrf_field()}}
        <div class = "form-group">
          <input type="submit" class = "btn btn-primary" value="Upload new file">
        </div>
      </form>
    </div>

          
      <h4>Uploaded File(s)</h4>

      <table class = "table table-hover">
        <tr>
          <td>File Name</td>
          <td>Download Link</td>
          <td>Delete File</td>
        </tr>

        @foreach($Files as $file)
          <tr>
            <td>{{$file}}</td>
            <td><a href="/download/{{$file}}" class='btn btn-primary'>Download</a></td>
            <td><a href="/delete/{{$file}}" class='btn btn-danger'>Delete This File</a></td>
          </tr>
        @endforeach
      </table>
  </body>
</html>