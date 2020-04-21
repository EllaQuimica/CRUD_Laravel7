@extends('layout')

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
  
<div class="container">
  <div class="card">
    <div class="card-header">
      Flag <a href="{{Route('flag.create')}}" class="btn btn-secondary">Add</a>
    </div>
    <ul>
      @foreach($flags as $flag)
      {{$flag->label}}
      @endforeach
    </ul>
  </div>
</div>


@endsection