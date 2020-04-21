@extends('layout.base')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Task Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tasks.update', $taskslist->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="task_name">Task Name:</label>
              <input type="text" class="form-control" name="task_name" value="{{ $taskslist->task_name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description">{{ $taskslist->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="time">Time Hours :</label>
              <input type="text" class="form-control" name="time" value="{{ $taskslist->time }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection