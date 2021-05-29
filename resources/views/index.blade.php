@extends('master')
@section('content')
 <table class="table table-bordered table-reponsive table-hover">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Registration</th>
      <th>Department Name</th>
      <th>Info</th>
      <th colspan="3" style="text-align: center;">Action</th>
    </tr>
    @php $i = 0; @endphp
    @foreach($students as $student)
    @php $i++ @endphp
    <tr>
      <td>{{$i}}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->registration_id }}</td>
      <td>{{ $student->department_name }}</td>
      <td>{{ $student->info }}</td>
      <td>  
        <a href="{{ route('create') }}" class="btn btn-success">Create</a>
      

      </td>
       <td>  
       
       <a href="{{ route('edit', $student->id) }}" class="btn btn-info">Edit</a>

      </td>
       <td>  
         <form class=" form-inline" action="{{ route('delete', $student->id) }}" method="post">
           {{ csrf_field() }}
          <input type="submit" class="btn btn-danger" value="delete">
        </form>

       

      </td>
    </tr>
      @endforeach
  </table>

@endsection

	
  

 