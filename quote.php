<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
    box-sizing:border-box;;
  }

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .container {
    padding: 64px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column-66 {
    float: left;
    width: 66.666666%;
    padding: 20px;
  }

  .column-33 {
    float: left;
    width: 33.3333333%;
    padding: 20px;
  }

  .large-font {
    font-size: 48px;
  }

  .xlarge-font {
    font-size: 64px;
  }

  img {
    display: block;
    height: auto;
    max-width: 100%;
  }

  @media screen and (max-width: 100px) {
    .column-66,
    .column-33 {
      text-align: center;
    }
    img {
      margin: 0;
    }
  }
  </style>
</head>
<body>

  <div style="text-align:center">
    <h2>Quote Catholic and inspirate</h2>
    <p>Website Yosephine</p>

    <div class="container">
      <div class="row">
        <div class="column-66">
          <h1 class="xlarge-font"><b>Quote</b></h1>
          <q>Do not let your hearts be troubled.Trust in God;trust also in me</q>
          <p class="author">- Jesus Christ</p>
          <div class="column-33">
            <img src="jesuschrist.png" width="335" height="471">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="column-66">
            <h1 class="xlarge-font"><b>Quote</b></h1>
            <q>Ignorance of Scripture is ignorance of Christ</q>
            <p class="author">- St. Jerome </p>
            <div class="column-33">
              <img src="StJerome.png" width="335" height="471">
            </div>
          </div>
        </div>
