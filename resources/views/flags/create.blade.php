@extends('layout.base')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Flags
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
      <form method="post" action="{{ route('flags.store') }}">
          <div class="form-group">
              @csrf
              <label for="label">Label Name:</label>
              <input type="text" class="form-control" name="label"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Add Flag</button>
      </form>
  </div>
</div>
@endsection