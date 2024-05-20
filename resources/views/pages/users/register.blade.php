<!doctype html>
<html lang="en">
@csrf
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>

.register {
  background-image: url("img/image.jpg");
  background-size: cover;
}
    .center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 800px;
      background: var(--bg);
      border-radius: 10px;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
      background-color: whitesmoke;
    }

    .center h1 {
      text-align: center;
      padding: 20px 0;
      color: var(--primary);
      color: yellowgreen;
    }

    .center form {
      padding: 0 40px;
      box-sizing: border-box;
    }


  </style>
</head>

<body class="register">
  <div class="center">
    <form action="/register/create" method="post" enctype="multipart/form-data">
      <h1>Registrasi</h1>
      <div class="row justify-content-center align-items-center">
        <div class="col">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No Hp</label>
            <input type="text" name="hp" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 d-flex ">
          <p>Jenis Kelamin : </p>
          <div class="form-check mx-3">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-Laki">
            <label class="form-check-label" for="male">
              Laki-Laki
            </label>
          </div>
          <div class="form-check mx-3">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan">
            <label class="form-check-label" for="female">
              Perempuan
            </label>
          </div>
        </div>
        {{-- <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Foto</label>
          <input type="file" name="foto" class="form-control" id="exampleInputPassword1" required>
        </div> --}}
        <div class="mt-3 mb-4">
          <button class="button btn-inti" name="daftar" id="daftar" type="submit">Daftar</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>