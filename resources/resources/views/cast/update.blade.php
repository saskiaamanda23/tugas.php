@extends('template.master')
@push('css')
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('web-title','Edit Movie Casts')
@section('content-title', 'Edit Data Cast')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.update', $casts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="movieCast">Movie Cast</label><br>
            <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="CastName" name="name" placeholder="Enter Cast Name..." value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="movieCast">Age</label><br>
            <input type="number" min="0" class="form-control" @error('age') {{'is invalid'}} @enderror id="CastAge" name="age" placeholder="Enter Cast Age..." value="{{old('age')}}">
          </div>
          <div class="form-group">
            <label for="bioCast">Bio</label><br>
            <textarea rows="4" cols="50" class="form-control" @error('bio') {{'is required'}} @enderror id="CastBio" name="bio" placeholder="Enter Cast Bio..." value="{{old('bio')}}"></textarea>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@push('js')
    <script src="{{asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('../../plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('../../plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush
