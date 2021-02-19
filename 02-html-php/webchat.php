<?php
include "koneksi.php";
if (isset($_POST['bsend'])) {
    $send = mysqli_query($webchat, "INSERT INTO insert_chat (send)
                                VALUES ('$_POST[t]')
                                ");
    $data = mysqli_fetch_array($simpan);
    if ($send) //
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>WebChat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <style>
        body {
            background-image: url(.jpeg);
            background-size: cover
        }

        .garis_verikal {
            border-left: 1.75px black solid;
            height: 30px;
            width: 0px;
        }
    </style>

    <title>form transaksi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main>

        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_css.html">Home</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="data_informasi.php">Data Informasi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="cek_kondisi.php">Cek Kondisi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="Form_Transaksi.php">Transaksi</a>
                    </li>
                    <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="update.php">Update Data</a>
            </li>
                </ul>
                
    <div class="dropdown">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Halo, <b><?= $_SESSION['username']?></b>
                      </button>
                      <div class="dropdown-menu">
                            <a class="dropdown-item" href="chat.php">Chat</a>  
                            <a class="dropdown-item" href="logout.php">Logout</a>  
                      </div>
                    </div>
                  </body>
    </div> </div>

                <link rel="stylesheet" href="style.css">
                <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        </nav> <br> <br> <br> <br> 

        <style>
            body {
              margin: 0 auto;
              max-width: 800px;
              padding: 0 20px;
            }
            
            .container {
              border: 2px solid #dedede;
              background-color: #f1f1f1;
              border-radius: 5px;
              padding: 10px;
              margin: 10px 0;
            }
            
            .darker {
              border-color: #ccc;
              background-color: #ddd;
            }
            
            .container::after {
              content: "";
              clear: both;
              display: table;
            }
            
            .container img {
              float: left;
              max-width: 60px;
              width: 100%;
              margin-right: 20px;
              border-radius: 50%;
            }
            
            .container img.right {
              float: right;
              margin-left: 20px;
              margin-right:0;
            }
            
            .time-right {
              float: right;
              color: #aaa;
            }
            
            .time-left {
              float: left;
              color: #999;
            }
            </style>
            </head>
            <body>
            
            <h2> SIMALAB WebChat</h2>
            
            <div class="container">
              <img src="ucok.jfif" alt="Avatar" style="width:100%;">
              <p>Hello. Sudah waktunya ganti shift.</p>
              <span class="time-right">11:00</span>
            </div>
            
            <div class="container darker">
              <img src="feri.jfif" alt="Avatar" class="right" style="width:100%;">
              <p>Aku sedang terjebak macet. Tunggu sebentar, aku akan sampaisegera.</p>
              <span class="time-left">11:01</span>
            </div>
            
            <div class="container">
              <img src="ucok.jfif" alt="Avatar" style="width:100%;">
              <p>Oh okay.</p>
              <span class="time-right">11:02</span>
            </div>
            
            <div class="container darker">
              <img src="feri.jfif" alt="Avatar" class="right" style="width:100%;">
              <p>Thanks.</p>
              <span class="time-left">11:05</span>
            </div>


            <p class="text-center mb-2 sender font-italic"></p>
            <div class="msg-box p-2">
                <div class="row">
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="message ...">
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="btn btn-success">Send</button>
                    </div><br><br><br><br><br>

            
            </body>
            </html>

    <style>.footer {
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: rgba(55, 50, 78, 0.247);
         color: white;
         text-align: center;
         position: fixed;
      }</style>    
      
    
      </head>
      <body>
     
      <div class="footer">
        <p>© 2020 Copyright: Simalab Kelompok 6 PPW</p>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>