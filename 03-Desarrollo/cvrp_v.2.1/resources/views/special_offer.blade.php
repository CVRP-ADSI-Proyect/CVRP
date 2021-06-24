<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CVRP - Nuevo Milenio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/logo_cvrp.ico">
    {{--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">--}}
    {{--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">--}}
    {{--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">--}}
    {{--    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">--}}
    <style type="text/css" id="enject"></style>
</head>
<body>
<!-- Header End====================================================================== -->
@include('header/header')
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('sidebar.sidebar')
        <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="{{route('main')}}">Inicio</a> <span class="divider">/</span></li>
                    <li class="active">Ofertas Especiales</li>
                </ul>
                <hr class="soft"/>
                <form class="form-horizontal span6">
                    <div class="control-group">
                        <label class="control-label alignL">Sort By </label>
                        <select>
                            <option>Priduct name A - Z</option>
                            <option>Priduct name Z - A</option>
                            <option>Priduct Stoke</option>
                            <option>Price Lowest first</option>
                        </select>
                    </div>
                </form>
                <div id="myTab" class="pull-right">
                    <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i
                                class="icon-list"></i></span></a>
                    <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i
                                class="icon-th-large"></i></span></a>
                </div>
                <br class="clr"/>
                <div class="tab-content">
                    <div class="tab-pane" id="listView">
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/b1.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $110.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/b2.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $110.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/b3.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $110.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/b4.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $110.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>

                        <hr class="soft"/>
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/6.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $222.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>
                        <div class="row">
                            <div class="span2">
                                <img src="themes/images/products/7.jpg" alt=""/>
                            </div>
                            <div class="span4">
                                <h3>New | Available</h3>
                                <hr class="soft"/>
                                <h5>Product Name </h5>
                                <p>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                </p>
                                <a class="btn btn-small pull-right" href="product_details.blade.php">View Details</a>
                                <br class="clr"/>
                            </div>
                            <div class="span3 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> $222.00</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br/>
                                    <a href="product_details.blade.php" class="btn btn-large btn-primary"> Add to <i
                                            class=" icon-shopping-cart"></i></a>
                                    <a href="product_details.blade.php" class="btn btn-large"><i
                                            class="icon-zoom-in"></i></a>
                                </form>
                            </div>
                        </div>
                        <hr class="soft"/>
                    </div>

                    <div class="tab-pane  active" id="blockView">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/b1.jpg"
                                                                             alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;110.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/b2.jpg"
                                                                             alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;110.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/b3.jpg"
                                                                             alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;110.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/b4.jpg"
                                                                             alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;110.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/9.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;222.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/4.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;222.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/6.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;222.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/7.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;222.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="product_details.blade.php"><img src="themes/images/products/8.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Manicure &amp; Pedicure</h5>
                                        <p>
                                            Lorem Ipsum is simply dummy text.
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.blade.php">
                                                <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                           href="#">&euro;222.00</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>


                        <hr class="soft"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
@include('footer.footer')
<!-- END Footer ================================================================== -->
</body>
</html>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>
