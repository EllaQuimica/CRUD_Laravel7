@extends('layout.base')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Flag:
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
      <form method="post" action="{{ route('flags.update', $flag->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="label">Label Name:</label>
              <input type="text" class="form-control" name="label" value="{{ $flag->label }}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection