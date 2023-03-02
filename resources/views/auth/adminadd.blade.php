{{-- <div class="w3-container w3-teal">
  <h2>Input Form</h2>
</div>

<form class="w3-container-indigo" action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label class="w3-text-teal"><b>UserName</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="username">

  <label class="w3-text-teal"><b>Password</b></label>
  <input class="w3-input w3-border w3-light-grey" type="password" name="password">

  <label class="w3-text-teal"><b>Level</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="level">


  <button class="w3-btn w3-blue-grey" name="simpan">{{ $tombol }}</button>
</form> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMRS | Singaparna</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <div class="unix-login">
        <div class="container-fluid rounded-3">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            
                        </div>
                        <div class="login-form">
                            <h4>Regterasi</h4>
                            <form action="{{ $action }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ $tombol }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>