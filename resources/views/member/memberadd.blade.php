<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h3>Input Member</h3>
                    
                </div>
                <div class="card-body">
                    <div class="basic-elements">
                        <form action="{{ $action }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>No.Handphone</label>
                                        <input class="form-control" type="text" name="no_hp" value="{{ $no_hp }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="example-email" class="form-control" type="email" placeholder="Email" name="email" value="{{ $email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input id="example-email" class="form-control" type="text" name="nik" value="{{ $nik }}">
                                    </div>   
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input class="form-control" type="file" name="foto" value="{{ $foto }}">
                                    </div>    
                                    <div class="form-group">
                                        <label>ktp</label>
                                        <input class="form-control" type="file" name="ktp" value="{{ $ktp }}">
                                    </div>    
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $alamat }}">
                                    </div>    
                                    <div class="form-group">
                                        <label>userid</label>
                                        <select name="users_id" id="users_id" class="custom-select">
                                            <option value="" selected disabled hidden>---Pilih---</option>
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}">{{ $item->names }}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                    <button class="btn btn-primary float-end">Simpan</button>   
                                    <button class="btn btn-danger float-end"><a href="{{ url('/member') }}">Batal</a></button>   
                                </div>
                            </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

          
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->


</body>
</html>