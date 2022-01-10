<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: blue;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
  }

  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  </style>
</head>
<body>

<div class="container">
  <div style="text-align: center">
    <h2>Kontak Saya</h2>
    <p>Jika ada pertanyaan silahkan tulis nama lengkap nama panggilan dan pertanyaannya.</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="flower.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="nama lengkap">Nama Lengkap</label>
        <input type="text" id="nama lengkap" name="Nama Lengkap" placeholder="Tuliskan Nama Lengkapmu">
        <label for="nama panggilan">Nama Panggilan</label>
        <input type="text" id="nama panggilan" name="Nama Panggilan" placeholder="Tuliskan Nama Panggilanmu">

        <label for="pertanyaan">Pertanyaan</label>
        <textarea id="subject" name="subject" placeholder="Tuliskan Pertanyaan.." style="height: 170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
