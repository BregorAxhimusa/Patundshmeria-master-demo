<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link href="../../assets/css/main.css" rel="stylesheet">
  <link href="../../assets/css/responsive.css" rel="stylesheet">
  <!-- FileUpload -->
  <link href="../../assets/fileuploader/font/font-fileuploader.css" rel="stylesheet">
  <link href="../../assets/fileuploader/jquery.fileuploader.min.css" media="all" rel="stylesheet">
  <link href="../../assets/fileuploader/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">

</head>

<body>
  <div class="d-flex" id="wrapper">
    <?php include("sidebar-user.php"); ?>
    <!-- Page Content  -->
    <div id="content">
      <div class="container-fluid">
        <a id="sidebarCollapse" class="d-lg-block d-none">
          <img src="../../assets/images/icon-toogle.png" class="mt-3" alt="">
        </a>
        <div class="float-right d-lg-none d-md-block">
          <img src="../../assets/images/player.png" id="s" class="" height="40px" alt="">
          <label class="">Filan Fisteku</label>
          <div class="btn-group">
            <button class="btn f-focus btn-sm dropdown-toggle mt-3" type="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="list-unstyled ml-3">
                <li>
                  <a href="index.php" class="name-sidebar mt-2 sidebar-link">
                    <img src="../../assets/images/Icon feather-home.png" class="img-fluid" height="1px" alt="">
                    <label>Postimet e mia</label>
                  </a>
                </li>
                <li>
                  <a href="shto-postime.php" class="name-sidebar mt-2 sidebar-link">
                    <img src="../../assets/images/Icon ionic-ios-add-circle-outline.png" class="img-fluid" alt="">
                    <label>Shto postime</label>
                  </a>
                </li>
                <li>
                  <a href="profili-im.php" class="name-sidebar mt-2 sidebar-link">
                    <img src="../../assets/images/Icon feather-user-check.png" class="img-fluid" alt="">
                    <label>Profili im</label>
                  </a>
                </li>
                <li class="iconlogout mb-2 mt-2">
                  <a href="#" class="name-sidebar">
                    <img src="../../assets/images/" class="img-fluid" alt="">
                    <label>Dil</label>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>