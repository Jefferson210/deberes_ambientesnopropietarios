<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link href='https://fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="css/lightbox.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <!--MENU -->
      <div class="row" id="menu">
        <div class="col-md-offset-1 col-md-10">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="col-md-3 navbar-brand" href="#">
                  <img src="imagenes/menu/logo.png" alt="">
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <div class="row"> 
                  <div class="col-md-offset-1 col-md-9">
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#">
                          Inicio <span class="sr-only">(actual)</span>
                        </a>
                      </li><!-- src-only leido por el lector de la pantalla, para acceso no visual-->
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          Portafolio<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">fotografias</a></li>
                          <li><a href="#">videos</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Wordpress</a></li>
                          <li><a href="#">Javascript</a></li>
                        </ul>
                        <li><a href="#">Acerca de mi</a></li>
                        <li>
                          <a href="#">
                            Contactanos
                          </a>
                        </li>
                      </li>
                      <li>
                        <button type="button" id="blog" class="btn btn-default btn-blog">Blog</button>
                      </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                      <button type="btn-search" class="btn-search btn btn-default" >
                        Buscar
                        <img src="imagenes/menu/search.png" alt="">
                      </button>
                    </form>   
                  </div>
                </div>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
      <!--SLIDER -->
      <div class="row" id="slider">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="imagenes/slider/img1.png" height="491" width="1280" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid in, 
                    autem perspiciatis magnam dicta! Quaerat rem tempora, soluta voluptates non
                     quis.</p>
                     <br>
                  <a href="#about" class="btn btn-dark btn-lg">LEARN MORE</a>
                </div>
              </div>
              <div class="item">
                <img src="imagenes/slider/img2.png" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid in, 
                    autem perspiciatis magnam dicta! Quaerat rem tempora, soluta voluptates non
                     quis.</p>
                     <br>
                  <a href="#about" class="btn btn-dark btn-lg">LEARN MORE</a>
                </div>
              </div>
              <div class="item">
                <img src="imagenes/slider/img3.png" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid in, 
                    autem perspiciatis magnam dicta! Quaerat rem tempora, soluta voluptates non
                     quis.</p>
                     <br>
                  <a href="#about" class="btn btn-dark btn-lg">LEARN MORE</a>
                </div>
              </div>
              <div class="item">
                <img src="imagenes/slider/img4.png" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid in, 
                    autem perspiciatis magnam dicta! Quaerat rem tempora, soluta voluptates non
                     quis.</p>
                     <br>
                  <a href="#about" class="btn btn-dark btn-lg">LEARN MORE</a>
                </div>
              </div>
              <div class="item">
                <img src="imagenes/slider/img5.png" alt="...">
                <div class="carousel-caption">
                  <h1>GOOD DESIGN IS GOD BUSINESS</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid in, 
                    autem perspiciatis magnam dicta! Quaerat rem tempora, soluta voluptates non
                     quis.</p>
                     <br>
                  <a href="#about" class="btn btn-dark btn-lg">LEARN MORE</a>
                </div>
              </div>
            </div>
            <!-- Controls -->
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

      <!--OUR SERVICES -->
      <div class="row" id="our_services">
        <div class="col-md-offset-1 col-md-10" >
          <div class="col-md-3" id="web">
            <center>
              <a href="#">
                <img src="imagenes/services/laptop.png" class="img-responsive" height="118" width="118" alt="">
              </a>
              <h4>
                Web Design
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt.<a data-toggle="collapse" href="#detail1" aria-expanded="false" aria-controls="collapseExample">Details
                </a>   
                <div class="collapse" id="detail1">
                  <div class="well">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris.
                  </div>
                </div>            
              </p>
            </center>
          </div>
           <div class="col-md-3" id="search">
            <center>
              <a href="#">
                <img src="imagenes/services/search.png" class="img-responsive" height="118" width="118" alt=""> 
              </a>
              <h4>
                Search Optimization
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt.<a data-toggle="collapse" href="#detail2" aria-expanded="false" aria-controls="collapseExample">Details
                </a>   
                <div class="collapse" id="detail2">
                  <div class="well">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris.
                  </div>
                </div>                 
              </p>
            </center>
          </div>
           <div class="col-md-3" id="online">
            <center>
              <a href="#">
                <img src="imagenes/services/shop.png" class="img-responsive" height="118" width="118" alt="">
              </a>
              <h4>
                Online Shop
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt.<a data-toggle="collapse" href="#detail3" aria-expanded="false" aria-controls="collapseExample">Details
                </a>   
                <div class="collapse" id="detail3">
                  <div class="well">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris.
                  </div>
                </div>            
              </p>
            </center>
          </div>
           <div class="col-md-3" id="social">
            <center>
              <a href="#">
                <img src="imagenes/services/social.png"class="img-responsive"  height="118" width="118" alt="">
              </a>
              <h4>
                Social Media
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt.<a data-toggle="collapse" href="#detail4" aria-expanded="false" aria-controls="collapseExample">Details
                </a>   
                <div class="collapse" id="detail4">
                  <div class="well">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris.
                  </div>
                </div>           
              </p>
            </center>
          </div>
        </div>
      </div>

      <!--PORTFOLIO -->
      <div class="row" id="portfolio">
        <div class="col-md-offset-1 col-md-10">
          <h3>Our Portfolio Awesome</h3> 
            <a href="#" class="btn btn-works btn-sm" id="work">More Works</a>
            <div id="gallery">
              <div class="col-xs-6 col-md-4">
                <a href="imagenes/portfolio/img1.png" data-lightbox="galeria">
                  <img src="imagenes/portfolio/img1.png" class="img-thumbnail" height="222" width="284" alt="...">
                </a>
                <div class="caption" >
                  <h4>Lorem Ipsum Dolar Sit Amet</h4>
                  <p>Lorem Ipsum Dolar Sit Amet,consectetur adipisicing elit.
                    Mauris nec ipsum at lacus commodo suscipit</p> 
                </div>
              </div>
              <div class="col-xs-6 col-md-4">
                <a href="imagenes/portfolio/img2.png" data-lightbox="galeria">
                  <img src="imagenes/portfolio/img2.png" class="img-thumbnail" height="222" width="284" alt="...">
                </a>
                <div class="caption" >
                  <h4>Lorem Ipsum</h4>
                  <p>Lorem Ipsum Dolar Sit Amet,consectetur adipisicinglit</p> 
                </div>
              </div>
              <div class="col-xs-6 col-md-4">
                <a href="imagenes/portfolio/img3.png" data-lightbox="galeria">
                  <img src="imagenes/portfolio/img3.png" class="img-thumbnail" height="222" width="284" alt="...">
                </a>
                <div class="caption" >
                  <h4>Ipsum Amet Dolar Sit</h4>
                  <p>Lorem Ipsum Dolar Sit Amet,consectetur adipisiciting
                    elitmauris nec ipsum at lacus commodo suscipit</p> 
                </div>
              </div>
            </div>
        </div> 
      </div>

      <!--WE OFFER-->
      <div class="row" id="offer">
        <div class="col-md-offset-1 col-md-10">
          <center>
            <div class="row" id="title">
              <h2>WHAT WE OFFER</h2>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </center>
          <div class="col-md-3 offer" >
            <div class="caption">
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, voluptates
                 perspiciatis illum blanditiis porro modi deserunt ex ad quod harum, corrupti 
                 odio magnam similique recusandae tempore in vel delectus sequi.</p>
                <p><a href="#" class="btn btn-details" role="button">Details</a></p>
            </div>
          </div> 
          <div class="col-md-3 offer">
            <div class="caption">
                <h4>Search Optimization</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, voluptates
                 perspiciatis illum blanditiis porro modi deserunt ex ad quod harum, corrupti 
                 odio magnam similique recusandae tempore in vel delectus sequi <a href="#">Details</a></p>  
            </div>
          </div> 
          <div class="col-md-3 offer">
            <div class="caption">
                <h4>Online Shop</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, voluptates
                 perspiciatis illum blanditiis porro modi deserunt ex ad quod harum, corrupti 
                 odio magnam similique recusandae tempore in vel delectus sequi.</p>
                <p><a href="#" class="btn btn-details" role="button">Details</a></p>
            </div>
          </div> 
          <div class="col-md-3 offer">
             <div class="caption">
                <h4>Social Media</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, voluptates
                 perspiciatis illum blanditiis porro modi deserunt ex ad quod harum, corrupti 
                 odio magnam similique recusandae tempore in vel delectus sequi <a href="#">>>></a></p>  
              </div>
          </div> 
        </div>
      </div>
      <hr>
       
      <!--TESTIMONIALS-->
      <div class="row" id="testimonials">
        <center>
          <div class="row" id="title_testimonials">
            <h2>TESTIMONIALS</h2>
          </div>
        </center>
        <div class="col-md-offset-2 col-md-8">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <center>
                <ol class="carousel-indicators" id="carousel-testimonials">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="hombre"></li> 
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
              </center>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Fuga nobis molestias sequi beatae? Ipsa ut sed nisi odio, fugit, 
                    beatae neque quisquam tempora saepe animi enim iste similique consequuntur, 
                    eum.
                </h2>
              </div>
              <div class="item">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Fuga nobis molestias sequi beatae? Ipsa ut sed nisi odio, fugit, 
                    beatae neque quisquam tempora saepe animi enim iste similique consequuntur, 
                    eum.
                </h2>
              </div>
              <div class="item">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Fuga nobis molestias sequi beatae? Ipsa ut sed nisi odio, fugit, 
                    beatae neque quisquam tempora saepe animi enim iste similique consequuntur, 
                    eum.
                </h2>
              </div>
            </div>  
          </div>
          <div id="img_testimonils">
            <center>
                <img src="imagenes/testimonials/test2.png" alt="">
                <img src="imagenes/testimonials/test1.png" alt=""> 
                <img src="imagenes/testimonials/test2.png" alt="">
            </center>  
          </div>
        </div>
      </div>
      
      <!--FOOTER-->
      <div class="row" id="footer">
        <div class="col-md-offset-1 col-md-10" id="footer_cont">
          <div class="col-md-3 footer" id="twitterFeeds" >
            <h4>TWITTER FEEDS</h4>
            <p>Check out this great theme item</p>
            <a href="#">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
            <hr>
            <p>Check out this great theme item</p>
            <a href="#">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
            <hr>
            <p>Check out this great theme item</p>
            <a href="#">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
          </div> 
          <div class="col-md-3 footer" id="newsletter" >
            <h4>NEWSLETTER</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>          
            <hr>
            <form role="form">
              <div class="form-group">
                <label for="email">Your E-mail address:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <button type="submit" class="btn btn-default" id="btn_addres">Sing Up</button>
            </form>
          </div> 
          <div class="col-md-3 footer" id="recentProjects">
            <h4>RECENT PROJECTS</h4>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/project.png" height="58" width="58" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>Sketchy Businnes Card
                <a href="#">http://tadjalskfj.com</a><br>
                2 weeks ago</p>
              </div>
            </div>
            <hr>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/project.png" height="58" width="58" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>Sketchy Businnes Card
                <a href="#">http://tadjalskfj.com</a><br>
                2 weeks ago</p>
              </div>
            </div>
            <hr>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/project.png" height="58" width="58" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>Sketchy Businnes Card
                <a href="#">http://tadjalskfj.com</a><br>
                2 weeks ago</p>
              </div>
            </div>
          </div> 
          <div class="col-md-3 footer" id="contact">
            <h4>CONTACT</h4>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/telf.png" height="35" width="29" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>1-000-000-0000 <br>
                  1-000-000-0000 
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/mensaje.png" height="40" width="35" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>1-000-000-0000 <br>
                  1-000-000-0000 
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="imagenes/footer/correo.png" height="27" width="36" alt="...">
                </a>
              </div>
              <div class="media-body">
                <p>abcdefg@hijs.dfh <br>
                  fjashfaf@jkfs.ckd
                </p>
              </div>
            </div>
          </div>  
        </div> 
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/lightbox-plus-jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script> src="js/lightbox.js"</script>
  </body>
</html>