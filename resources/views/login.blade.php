@extends('layouts.master')
@section('content')
<form class="dropdown-menu p-4">
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Email</label>
      <input type="text" class="form-control" id="exampleDropdownFormPassword2">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="text" class="form-control" id="exampleDropdownFormPassword2">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection