<?php 
  include "controller/controller.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link href="data/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid p-3 my-3">
        <div class="height-100 d-flex justify-content-center align-items-center">
              <div class="card p-3">
              <div class="d-flex justify-content-between align-items-center">
                <img src="https://www.npru.ac.th/2019/img/logo.png" width="400" />  
                <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t39.30808-6/315059628_147611944677439_2675033533968265226_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFA9RT9WnPpklDrfoUxtpo4dqXdSdWLFLZ2pd1J1YsUtqyqh7VnkQxUbzHVYaGALMzEUkOxNZ08C1BBQPPzvU3p&_nc_ohc=lahyIc9atEUAX_2E-6l&_nc_ht=scontent.fbkk5-8.fna&oh=00_AfDcJ7_r4IPohgjVEGkl4H-bQyDT7S1ckO7Eu2PoLdkw8g&oe=641FDD92" width="160" height="200" />         
              </div>
              <div class="px-2 number mt-3 d-flex justify-content-between align-items-center">
                <p> ชื่อ-นามสกุล : <?php echo $jsonUser[0]; ?><br>
                    รหัสนักศึกษา : <?php echo $jsonUser[1]; ?><br>
                    สาขาวิชา : <?php echo $jsonUser[2]; ?>
                </p>
              </div>
              <div class="no">
                <h3>5555-5555-5555-5555</h3>
              </div>
                  <div class="p-4 card-border mt-4">
                      <div class="d-flex justify-content-between align-items-center">
                          <span class="cardholder">0701</span>
                          <span class="expires">Expires</span>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                          <span class="name">Supphalak Maneepanpanit</span>
                          <span class="date">12/26</span>
                      </div>
                  </div>

                  <div class="p-4 card-border mt-4">
                      <div class="d-flex justify-content-between align-items-center">
                          <span class="cardholder">วันเกิด : <?php echo $jsonDecode[0]; ?></span>
                          <span class="expires">คุณกำลังศึกษา</span>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                          <span class="name">อายุ : <?php echo $jsonDecode[1]; ?></span>
                          <span class="date"><?php echo $rs2; ?></span>
                      </div>
                  </div>
              </div>
              
        </div>
       </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jsM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>