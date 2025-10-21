<!DOCTYPE html>
<html>
  <head>
    <title>Pemrograman Web</title>
    <!-- <link rel="stylesheet" href="style/styles.css" /> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body>
    <img
      src="/images/logo.png"
      alt="Logo UNNES"
      width="100"
      height="150px"
      class="tengah"
    />
    <div class="tengah">
      <h1 id="Judul">PEMROGRAMAN WEB</h1>
      <p class="warnateks">Selamat datang di Matakuliah Pemrograman Web</p>
    </div>
    <h1 id="tes">tes</h1>
    <script>
      document.getElementById("tes").innerHTML = "Teks baru dengan innerHTML!";
    </script>
    <div class="kotak">
      <h3 class="subjudul"><u>Deskripsi Matakuliah</u></h3>
      <p class="paragraf">
        Matakuliah ini berisi praktiik implementasi konsep dasar
        <i style="color: red">internet web-based</i> dan
        <i style="color: red">content management system</i> dengan bahasa
        pemograman HTML, CSS, JavaScript, dan PHP
      </p>
    </div>
    <div class="kotak">
      <h3 class="subjudul"><u>Dosen Pengampu</u></h3>
      <pre style="font-family: 'Times New Roman', Times, serif">
        <b style="color: green;">Riska Dami Ristanto, S.Pd., M.Pd.</b><br />
            NIP: 199207112019031012<br />
            Email: rdristanto@mail.unnes.ac.id
      </pre>
    </div>
    <div class="kotak">
      <h3 class="subjudul"><u>Materi Pemrograman Web</u></h3>
      <table>
        <tr>
          <th>No</th>
          <th>Materi Pokok</th>
          <th>Sub Topik</th>
        </tr>
        <tr>
          <td rowspan="3">1</td>
          <td rowspan="3">HTML</td>
          <td>HTML 1 Basic</td>
        </tr>
        <tr>
          <td>HTML 2 Heading</td>
        </tr>
        <tr>
          <td>HTML 3 Image</td>
        </tr>
        <tr>
          <td rowspan="3">2</td>
          <td rowspan="3">CSS</td>
          <td>CSS 1 Basic</td>
        </tr>
        <tr>
          <td>CSS 2 Color</td>
        </tr>
        <tr>
          <td>CSS 3 Margins</td>
        </tr>
        <tr>
          <td rowspan="3">3</td>
          <td rowspan="3">JavaScript</td>
          <td>JavaScript 1 Basic</td>
        </tr>
        <tr>
          <td>JavaScript 2 Variable</td>
        </tr>
        <tr>
          <td>JavaScript 3 Functions</td>
        </tr>
        <tr>
          <td rowspan="3">4</td>
          <td rowspan="3">PHP</td>
          <td>PHP 1 Basic</td>
        </tr>
        <tr>
          <td>PHP 2 Tipe Data</td>
        </tr>
        <tr>
          <td>PHP 3 MySQL Databases</td>
        </tr>
      </table>
    </div>
    <br />
    <button onclick="document.location='{{ route('login') }}'" class="buttonlogout">
      Logout
    </button>
    <br />
    <button onclick="print()">print dek</button>
  </body>
</html>
