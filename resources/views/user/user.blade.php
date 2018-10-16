@extends('layout/NavbarLayout')
@section('title')
หน้าหลัก
@endsection
@section('head')

@endsection
@section('content')
<h1>User Page<h1>
  @if (Session::has('sc'))
      <div class='alert alert-success'>
          {{ Session::get('sc') }}
      </div>
  @endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($user as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->fname }}</td>
            <td>{{ $row->lname }}</td>

            <td align='center'>
              <a href='user/{{ $row->id }}/edit' class='btn btn-primary'>แก้ไข</a>
            </td>
            <td align='center'>
              <form method='post' action='user/{{ $row->id }}' class='delete_form'>

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type='submit' value='ลบ' class='btn btn-danger' id='del'>
                  ลบ
                </button>
              </form>
            </td>
        </tr>
    @endforeach
@endsection
@section('js')
<script language="javascript">
  $(function(){
    //$('form.delete_form').on('submit',function(){
      $('button#del').click(function(){
      if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")){
        return true;
      }
      else{
        return false;
      }

    })
  });
</script>


  </tbody>
</table>
@endsection
