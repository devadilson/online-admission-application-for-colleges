@extends('adminlte::page')
@section('title', 'Update Religion')

@section('content_header')
    <h1>Update a Religion</h1>
@stop

@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Update a Religion</h3>
            </div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
          <div class="card-body">
            <form method="post" action="{{ route('religions.update', $religion->id) }}">
                @method('PATCH') 
                @csrf
                <input type="hidden" name="id" value={{ $religion->id }}>
                <div class="form-group">

                    <label for="name">Religion Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $religion->name }} />
                </div>
                <button type="submit" class="btn btn-info" style="float: right;">Update</button>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@stop

