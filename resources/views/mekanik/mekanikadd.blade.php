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
                    <h3>Input mekanik</h3>
                    
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
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Aktivasi</label>
                                        <select class="form-select" name="status_aktivasi" aria-label="Default select example">
                                            <option selected>---Pilih---</option>
                                            <option value="0">Aktif</option>
                                            <option value="1">Non Aktif</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Member</label>
                                        <select class="form-select" name="member_id" aria-label="Default select example">
                                            @foreach ($member as $item)
                                            <option selected>---Pilih---</option>
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                          </select>
                                    </div>   
                                </div>
                                    <button class="btn btn-primary ">Simpan</button>   
                                    <button class="btn btn-danger "><a href="{{ url('/mekanik') }}">Batal</a></button>   
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