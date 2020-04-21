@extends('layout.base')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Task Name</td>
          <td>Description</td>
          <td>Time hours</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($taskslist as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->task_name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->time}}</td>
            <td><a href="{{ route('tasks.edit', $task->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection