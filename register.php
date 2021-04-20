<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Regjistrohu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">
  <!-- FileUpload -->
  <link href="assets/fileuploader/font/font-fileuploader.css" rel="stylesheet">
  <link href="assets/fileuploader/jquery.fileuploader.min.css" media="all" rel="stylesheet">
  <link href="assets/fileuploader/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">

</head>

<body>
  <main>
    <div id="" class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="mt-5 mb-5 px-3">
            <h3>Regjistrohu tek Patundshmeria</h3>
            <label for="" class="inside-adres mt-3">
              Hap llogarine tende falas dhe listo banesat, shtepine tuaj per shitje.
            </label>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="container-fluid">
            <div class="col-lg-12 px-0">
              <nav class="mt-5">
                <div class="nav buton-a nav-justified input-addpost col-lg-8" id="nav-tab" role="tablist">
                  <!-- nav-tabs -->
                  <a class="nav-item nav-link lang active" key="Vehicle" id="nav-home-tab" data-toggle="tab"
                    href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <label>Regjistrohu</label>
                  </a>
                  <a class="nav-item nav-link lang" key="Technical" id="nav-profile-tab" data-toggle="tab"
                    href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <label>Kycu</label>
                  </a>
                </div>
              </nav>
              <div class="tab-content mb-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="col-lg-12">
                    <form action="" class="row mt-5 input-addpost">
                      <div class="col-lg-8 col-md-12 ">
                        <div class="form-group">
                          <p class="inside-adres">Emri mbiemri</p>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <p class="inside-adres">Biznes</p>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <p class="inside-adres">Username</p>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <p class="inside-adres">Fjalkalimi</p>
                          <input type="password" class="form-control" id="">
                        </div>
                        <button class="btn button-btn btn-cms col-12">REGJISTROHU</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <form action="" class="row mt-5 input-addpost">
                    <div class="col-lg-8 col-md-12 ">
                      <div class="form-group">
                        <p class="inside-adres">Username</p>
                        <input type="text" class="form-control" id="">
                      </div>
                      <div class="form-group">
                        <p class="inside-adres">Fjalkalimi</p>
                        <input type="password" class="form-control" id="">
                      </div>
                      <button class="btn button-btn btn-cms col-12">KYQU</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <img src="assets/images/storefront-colour-800px.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </main>
  <?php include "includes/front-footer.php" ?>