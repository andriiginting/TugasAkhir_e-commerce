<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styleHA.css" rel="stylesheet">
</head>
<body>
  <nav class="sp-navbar navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPESIALKU</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="chart1"><a href="#">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="sp-btn btn btn-default ">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
  </nav>

  <div class="sp-slider">
    <div class="container-img">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/img1.jpg" alt="CSGO Image1">
          </div>
          <div class="item">
            <img src="assets/img1.jpg" alt="CSGO Image1">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="sp-content">
    <div class="container-img">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                KATEGORINYA DISINI!
              </a>
              <a href="#" class="list-group-item">Kategori1
                <span class="badge">17</span>
              </a>
              <a href="#" class="list-group-item">Kategori2
                <span class="badge">08</span></a>
              <a href="#" class="list-group-item">Kategori3
                <span class="badge">19</span>
              </a>
              <a href="#" class="list-group-item">Kategori4
                <span class="badge">45</span>
              </a>
            </div>
          </div>
          <!-- untuk konten produk -->
          <div class="col-md-8">
            <div class="col-md-4">
              <img src="assets/img2.jpg" class="sp-item-img-content img-responsive"/>
              <a href="#" class="text-center">Nama Produk</a>
              <p>Harganya</p>
            </div>

            <div class="col-md-4">
              <img src="assets/img1.jpg" class="sp-item-img-content img-responsive"/>
              <a href="#" class="text-center">Nama Produk</a>
              <p>Harganya</p>
            </div>

            <div class="col-md-4">
              <img src="assets/img3.jpg" class="sp-item-img-content img-responsive"/>
              <a href="#" class="text-center">Nama Produk</a>
              <p>Harganya</p>
            </div>
          </div>

          <!--untuk pager/nomor halaman -->
          <nav class="text-center" aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>


<script src="assets/js/jquery-1.12.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
