<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CVRP - Nuevo Milenio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/images/ico/logo_cvrp.ico">
</head>
<body>
<!-- Header====================================================================== -->
@include ('header.header')
<!-- Navbar ================================================== -->
<!-- Header End====================================================================== -->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="{{route ('offer')}}"><img style="width:100%" src="themes/images/carousel/1.png"
                                                 alt="special offers"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="{{route ('offer')}}"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="{{route ('offer')}}"><img src="themes/images/carousel/3.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="{{route ('offer')}}"><img src="themes/images/carousel/4.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="{{route ('offer')}}"><img src="themes/images/carousel/5.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="{{route ('offer')}}"><img src="themes/images/carousel/6.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('sidebar.sidebar')
        <!-- Sidebar end=============================================== -->
            <div>
                <h4>Latest Products </h4>
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/6.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>

                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/7.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/8.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/9.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/10.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.blade.php"><img src="themes/images/products/11.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.blade.php"> <i
                                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                   href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
@include ('footer.footer')
<!-- END FOOTER ==========================================================================================-->
</body>
</html>
