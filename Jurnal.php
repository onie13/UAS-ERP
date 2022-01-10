<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  * {
    box-sizing: border-box;
  }

  body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
  }

  .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }

  .timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
  }

  .container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
  }
  .container:: after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
  }
  .left {
    left: 0;
  }

  .right{
    left: 50%;
  }

  .left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
  }

  .right:: before {
    content:  " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  .right::after {
    left: -16px;
  }

  .content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
  }
  @media screen and (max-width: 600px) {
    .timeline:: after {
      left: 31px;
    }
    .container {
      width: 100%;
      padding-left: 70px;
      padding-right: 25px;
    }
    .container:: before {
      left: 60px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent white transparent transparent;
    }
    .left::after,. .right::after {
      left: 15px;
    }
    .right {
      left: 0%;
    }
  }
  </style>
</head>
<body>

  <div class="timeline">
    <div class="container-left">
      <div class="content">
        <h2>2021</h2>
        <p>Saya Sudah semester 7 dan saya masih berjuang untuk menyelesaikan perkuliahan saya Tahu perjuangan saya panjang
          Tuhan selalu menyertai saya di sepanjang hidup saya ini</p>
      </div>
    </div>
    <div>
      <div class="container right">
        <div class="content">
          <h2>2018</h2>
          <p>Saat masuk kuliah Tahun 2018 ambil Jurusan Sistem Informasi dan saya mulai masuk kuliah bulan sepetember 2018
            itu saja perjalanan hidup saya.</p>
          </div>
        </div>
        <div>
          <div class="container left">
            <div class="content">
            <h2>2017</h2>
            <p>Saya masih SMA dan banyak banget masa lalu saya yaitu pembullyan teman saya sampai lempar sisir ke saya
              Apa salah saya.Saya hampir mau mati tapi Tuhan masih Sayang sama saya.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>2016</h2>
              <p>Saya masih Kelas 1 SMA itu yang aku harus lalui</p>
            </div>
          </div>
          <div>
            <div class="container left">
              <div class="content">
              <h2>2015</h2>
              <p>Bapak Saya sudah Lama Meninggal pada Tanggal 2 Juli 2015 dan pada saat itu saya sudah selesai SMP</p>
            </div>
          </div>

        </body>
        </html>
