<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Adminto - Responsive Bootstrap 4 Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    
        <!--pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

        <!-- Magnific-popup -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>

    <body>
        <!-- sample modal content -->
            <div id="myLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Masuk Area Member</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h4><a href="" data-toggle="modal" data-target="#myReg">Daftar</a></h4>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Masuk</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

             <!-- sample modal content -->
            <div id="myReg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Daftar Member</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h4><a href="" data-toggle="modal" data-target="#myLogin">Masuk</a></h4>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Daftar</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="index.html">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#demo" class="nav-link">Demos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#clients" class="nav-link">Clients</a>
                        </li>   
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Pricing</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#myLogin">Login</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="home-title text-white">
                                    <h5 class="mb-3 text-white-50">JIBFX</h5>
                                    <h2 class="mb-4">JIBFX</h2>
                                    <p class="text-white-50 home-desc font-16 mb-5">Adminto is a fully featured premium Landing template built on top of awesome Bootstrap 4.3.1, modern web technology HTML5, CSS3 and jQuery. </p>
                                    <div class="watch-video mt-5">
                                        <a href="#" class="btn btn-custom mr-4">Get Started <i class="mdi mdi-chevron-right ml-1"></i></a>
                                        <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle mr-2"></i> <span>Watch The Video</span></a>
                                    </div>
    
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-sm-6">
                                <div class="home-img mo-mt-20">
                                    <img src="images/home-img.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

        <!-- features start -->
        <section class="features" id="features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-code-tab" data-toggle="pill" href="#pills-code" role="tab" aria-controls="pills-code" aria-selected="true">
                                    <div class="clearfix">
                                        <div class="features-icon float-right">
                                            <i class="pe-7s-notebook h1"></i>
                                        </div>
                                        <div class="d-none d-lg-block mr-4">
                                            <h5>Quality Code</h5>
                                            <p>At vero eos et accusam et</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-customize-tab" data-toggle="pill" href="#pills-customize" role="tab" aria-controls="pills-customize" aria-selected="false">
                                    <div class="clearfix">
                                        <div class="features-icon float-right">
                                            <i class="pe-7s-edit h1"></i>
                                        </div>
                                        <div class="d-none d-lg-block mr-4">
                                            <h5>Easy to customize</h5>
                                            <p>Sed ut unde iste error sit</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-support-tab" data-toggle="pill" href="#pills-support" role="tab" aria-controls="pills-support" aria-selected="false">
                                    <div class="features-icon float-right">
                                        <i class="pe-7s-headphones h1"></i>
                                    </div>
                                    <div class="d-none d-lg-block mr-4">
                                        <h5>Awesome Support</h5>
                                        <p>It will be as simple as fact</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="images/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <i class="pe-7s-notebook h1 text-primary"></i>
                                            </div>
                                            <h5 class="mb-3">Quality Code</h5>
                                            <p class="text-muted">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
                                            <p class="text-muted">If several languages coalesce the grammar of the resulting language </p>
                                            <div class="row pt-4">
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Nemo enim ipsam quia</p>
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Ut enim ad minima</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> At vero eos accusamus et </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-custom">Learn More <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="tab-pane fades how active" id="pills-customize" role="tabpanel" aria-labelledby="pills-customize-tab">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="images/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <i class="pe-7s-edit h1 text-primary"></i>
                                            </div>
                                            <h5 class="mb-3">Easy to customize</h5>
                                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
                                            <p class="text-muted">If several languages coalesce the grammar of the resulting language </p>
                                            <div class="row pt-4">
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Nemo enim ipsam quia</p>
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Ut enim ad minima</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> At vero eos accusamus et </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-custom">Learn More <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">
                                
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="images/features-img/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <i class="pe-7s-headphones h1 text-primary"></i>
                                            </div>
                                            <h5 class="mb-3">Awesome Support</h5>
                                            <p class="text-muted">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
                                            <p class="text-muted">If several languages coalesce the grammar of the resulting language </p>
                                            <div class="row pt-4">
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Nemo enim ipsam quia</p>
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Ut enim ad minima</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                        <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> At vero eos accusamus et </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-custom">Learn More <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end tab-content -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- services start -->
        <section class="section bg-light" id="services">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Services</h6>
                            <h4>What we do</h4>
                            <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/layers.png" alt="">
                            </div>
                            <h5>Responsive Layouts</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">The new common language will be more simple and regular than the existing European languages.</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/core.png" alt="">
                            </div>
                            <h5>Based on Bootstrap UI</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">If several languages coalesce the grammar language is more than that of indual languages.</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/paperdesk.png" alt="">
                            </div>
                            <h5>Creative Design</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">It will be as simple as occidental it will be to an english person. It will be as simple as occidental</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/solarsystem.png" alt="">
                            </div>
                            <h5>Awesome Support</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/datatext.png" alt="">
                            </div>
                            <h5>Easy to customize</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">Everyone realizes why a new common language would be one could refuse to pay translators.</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-left mr-4">
                                <img src="images/icons/browserscript.png" alt="">
                            </div>
                            <h5>Quality Code</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis deleniti atque</p>
                                <a href="#" class="text-custom">Read more...</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- services end -->

        <!-- Demo start -->
        <section class="section" id="demo">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Demos</h6>
                            <h4>Available Demos</h4>
                            <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Light Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-2.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Horizontal Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-3.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Semi Dark Layout</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-4.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Semi Dark Horizontal</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-5.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Landing Page</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="images/demo/demo-6.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Dark Sidebar</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-4">
                            <button class="btn btn-custom">More Demos <i class="mdi mdi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- Demo end -->
        
        <!-- clients start -->
        <section class="section bg-light" id="clients">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Clients</h6>
                            <h4>What our Users Says</h4>
                            <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testi-box p-4 bg-white mt-4 text-center">
                            <p class="text-muted mb-4">" The designer of this theme delivered a quality product. I am not a front-end developer and I hate when the theme I download has glitches or needs minor tweaks here and there. This worked for my needs just out of the boxes. Also, it is fast and elegant."</p>
                            <div class="testi-img mb-4">
                                <img src="images/testi/img-1.png" alt="" class="rounded-circle img-thumbnail">
                            </div>
                            <p class="text-muted mb-1"> - Adminto User</p>
                            <h5 class="font-18">Xpanta</h5>
                            
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testi-box p-4 bg-white mt-4 text-center">
                            <p class="text-muted mb-4">"  Extremely well designed and the documentation is very well done. Super happy with the purchase and definitely recommend this! "</p>
                            <div class="testi-img mb-4">
                                <img src="images/testi/img-2.png" alt="" class="rounded-circle img-thumbnail">
                            </div>
                            <p class="text-muted mb-1"> - Adminto User</p>
                            <h5 class="font-18">G_Sam</h5>
                            
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testi-box p-4 bg-white mt-4 text-center">
                            <p class="text-muted mb-4">"  We used this theme to save some design time but... wow it has everything you didn't realize you would need later. I highly recommend this template to get your web design headed in the right direction quickly.  "</p>
                            <div class="testi-img mb-4">
                                <img src="images/testi/img-3.png" alt="" class="rounded-circle img-thumbnail">
                            </div>
                            <p class="text-muted mb-1"> - Adminto User</p>
                            <h5 class="font-18">Isaacfab</h5>
                            
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mt-5 pt-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- counter start -->
        <section class="section bg-gradient">
            <div class="container-fluid">
                <div class="row" id="counter">
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-add-user display-4"></i>
                            </div>
                            <div class="counter-content text-white">
                                <h2 class="counter-value mb-3" data-count="1200">0</h2>
                                <h5 class="counter-name">Fans</h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-cart display-4"></i>
                            </div>
                            <div class="counter-content text-white">
                                <h2 class="mb-3"><span class="counter-value" data-count="1500">10</span> +</h2>
                                <h5 class="counter-name">Total Sales</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-smile display-4"></i>
                            </div>
                            <div class="counter-content text-white">
                                <h2 class="counter-value mb-3" data-count="6931">608</h2>
                                <h5 class="counter-name">Happy Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-medal display-4"></i>
                            </div>
                            <div class="counter-content text-white">                       
                                <h2 class="counter-value mb-3" data-count="800">2</h2>
                                <h5 class="counter-name">Won Prices</h5>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        <!-- counter end -->

        <!-- pricing start -->
        <section class="section bg-light" id="pricing">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Pricing</h6>
                            <h4>Our Pricing plans</h4>
                            <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pricing-plans bg-white text-center p-4 mt-4">
                            <h5 class="plan-title mt-2 mb-4">Single</h5>

                            <div class="plan-price">
                                <h4 class="mb-3 price"><sup><small>$</small></sup>24</h4>
                                <h5 class="plan-duration text-muted font-18">Per license</h5>
                            </div>

                            <div class="pricing-content p-4 text-muted mb-2">
                                <p>Number of end products 1</p>
                                <p>Customer support</p>
                                <p>Free Updates</p>
                                <p>Monthly updates</p>
                                <p>24 x 7 Support</p>
                            </div>

                            <div class="pt-4">
                                <a href="#" class="btn btn-custom btn-block">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-plans bg-white text-center p-4 mt-4">
                            <h5 class="plan-title mt-2 mb-4">Multiple</h5>

                            <div class="plan-price">
                                <h4 class="mb-3 price"><sup><small>$</small></sup>120</h4>
                                <h5 class="plan-duration text-muted font-18">Per license</h5>
                            </div>

                            <div class="pricing-content p-4 text-muted mb-2">
                                <p>Number of end products 1</p>
                                <p>Customer support</p>
                                <p>Free Updates</p>
                                <p>Monthly updates</p>
                                <p>24 x 7 Support</p>
                            </div>

                            <div class="pt-4">
                                <a href="#" class="btn btn-custom btn-block">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-plans bg-white text-center p-4 mt-4">
                            <h5 class="plan-title mt-2 mb-4">Extended</h5>

                            <div class="plan-price">
                                <h4 class="mb-3 price"><sup><small>$</small></sup>999</h4>
                                <h5 class="plan-duration text-muted font-18">Per license</h5>
                            </div>

                            <div class="pricing-content p-4 text-muted mb-2">
                                <p>Number of end products 1</p>
                                <p>Customer support</p>
                                <p>Free Updates</p>
                                <p>Monthly updates</p>
                                <p>24 x 7 Support</p>
                            </div>

                            <div class="pt-4">
                                <a href="#" class="btn btn-custom btn-block">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- pricing end -->

        <!-- contact start -->
        <section class="section" id="contact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-5">
                            <h6 class="text-primary small-title">Contact</h6>
                            <h4>Have any Questions ?</h4>
                            <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="get-in-touch">
                            <h5>Get in touch</h5>
                            <p class="text-muted mb-5">At solmen va esser necessi far</p>

                            <div class="mb-3">
                                <div class="get-touch-icon float-left mr-3">
                                    <i class="pe-7s-mail h2 text-primary"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">E-mail</h5>
                                    <p class="text-muted">example@abc.com</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="get-touch-icon float-left mr-3">
                                    <i class="pe-7s-phone h2 text-primary"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">Phone</h5>
                                    <p class="text-muted">012-345-6789</p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="get-touch-icon float-left mr-3">
                                    <i class="pe-7s-map-marker h2 text-primary"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">Address</h5>
                                    <p class="text-muted">20 Rollins Road Cotesfield, NE 68829</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="custom-form bg-white">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

        <!-- footer start -->
        <footer class="footer bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center">
                            <div class="footer-logo mb-3">
                                <img src="images/logo-light.png" alt="" height="20">
                            </div>
                            <ul class="list-inline footer-list text-center mt-5">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">About</a></li>
                                <li class="list-inline-item"><a href="#">Services</a></li>
                                <li class="list-inline-item"><a href="#">Clients</a></li>
                                <li class="list-inline-item"><a href="#">Pricing</a></li>
                                <li class="list-inline-item"><a href="#">Contact</a></li>
                            </ul>
                            <ul class="list-inline social-links mb-4 mt-5">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                            <p class="text-white-50 mb-4">2016 - 2019 © Adminto. Design by <a href="#" target="_blank" class="text-white-50">Coderthemes</a> </p>
                            
                        </div>
                    </div>
                
                </div>

            </div>
        </footer>
        <!-- footer end -->

        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        
        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>

        <!-- counter js -->
        <script src="js/counter.int.js"></script>

        <!-- custom js -->
        <script src="js/app.js"></script>
    </body>

</html>