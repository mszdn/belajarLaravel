<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style/styles.css" /> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>

  <body>
    <img
      src="{{ asset('images/logo.png') }}"
      alt="Logo UNNES"
      width="100"
      height="150px"
      class="tengah"
    />
    <div class="tengah">
      <h1 id="Judul">HALAMAN LOGIN</h1>
      <p class="warnateks">Selamat datang di Matakuliah Pemrograman Web</p>
    </div>
    <div class="loginform">
      <img
        src="https://unnes.ac.id/admission/wp-content/uploads/sites/3/2023/03/10-rank-1.jpg"
        class="gambargaruda"
      />
      <div class="garis"></div>
      <div class="loginbox">
        <h2><u>Login</u></h2>
        <p class="warnateks">Silahkan masukkan NIM dan Password</p>
        <form>
          <label>NIM:</label><br />
          <input type="text" /><br />
          <label>Password:</label><br />
          <input type="password" /><br />
        </form>
        <br />
        <button onclick="document.location='{{ route('data') }}'">Login</button>
      </div>
    </div>
  </body>
</html>
