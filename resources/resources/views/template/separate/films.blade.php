<link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Films</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="id films">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Judul film ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ringkasan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan ringkasan ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Tahun rilis ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Poster</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan poster ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Masukan thumbnail film</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya menyetujui persyaratan dan ketentuan yang berlaku</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js;') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>