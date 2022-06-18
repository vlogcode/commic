<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin comic</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="../include/bootstrap.min.css" rel="stylesheet">
    <link href="../include/nifty.min.css" rel="stylesheet">
    <link href="../../nifty-v2.9.1/demo/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="../include/nifty-demo.min.css" rel="stylesheet">
</head>

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        <!--===================================================-->
        <header id="navbar">
            <?php include("../include/layout_admin/navbar.php") ?>
        </header>
        <!--===================================================-->
        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    <div class="pad-all text-center">
                        <h3>Welcome back to the Dashboard.</h3>
                        <p>Scroll down to see quick links and overviews of your Server, To do list, Order status or get
                            some Help using Nifty.</p>
                    </div>
                </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <!-- <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-warning panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-pli-file-word icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">241</p>
                                    <p class="mar-no">Documents</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-info panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-pli-file-zip icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">241</p>
                                    <p class="mar-no">Zip Files</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-mint panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-pli-camera-2 icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">241</p>
                                    <p class="mar-no">Photos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-danger panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-pli-video icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">241</p>
                                    <p class="mar-no">Tà khoản đã khoa</p>
                                </div>
                            </div>
                        </div>

                    </div> -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Order Status</h3>
                                </div>

                                <!--Data Table-->
                                <!--===================================================-->
                                <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 table-toolbar-left">
                                                <button class="btn btn-purple"><i
                                                        class="demo-pli-add icon-fw"></i>Add</button>
                                                <button class="btn btn-default"><i
                                                        class="demo-pli-printer icon-lg"></i></button>
                                                <div class="btn-group">
                                                    <button class="btn btn-default"><i
                                                            class="demo-pli-information icon-lg"></i></button>
                                                    <button class="btn btn-default"><i
                                                            class="demo-pli-trash icon-lg"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 table-toolbar-right">
                                                <div class="form-group">
                                                    <input type="text" autocomplete="off" class="form-control"
                                                        placeholder="Search" id="demo-input-search2">
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-default"><i
                                                            class="demo-pli-download-from-cloud icon-lg"></i></button>
                                                    <div class="btn-group dropdown">
                                                        <button
                                                            class="btn btn-default btn-active-primary dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i class="demo-pli-dot-vertical icon-lg"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tài khoản</th>
                                                    <th>loại tài khoản</th>
                                                    <th>trạng thái</th>
                                                    <th class="text-center">Tùy chỉnh</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53431</a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td><span class="text-muted">Oct 22, 2014</span></td>
                                                    <td>$45.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pull-right">
                                        <ul class="pagination text-nowrap mar-no">
                                            <li class="page-pre disabled">
                                                <a href="#">&lt;</a>
                                            </li>
                                            <li class="page-number active">
                                                <span>1</span>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">2</a>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <span>...</span>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">9</a>
                                            </li>
                                            <li class="page-next">
                                                <a href="#">&gt;</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--===================================================-->
                                <!--End Data Table-->

                            </div>
                        </div>
                    </div>



                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/2.png"
                                                    alt="Profile Picture">
                                                <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Stephen Tran</p>
                                                <small class="text-muteds">Availabe</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/7.png"
                                                    alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Brittany Meyer</p>
                                                <small class="text-muteds">I think so</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/1.png"
                                                    alt="Profile Picture">
                                                <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Jack George</p>
                                                <small class="text-muteds">Last Seen 2 hours ago</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/4.png"
                                                    alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Donald Brown</p>
                                                <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/8.png"
                                                    alt="Profile Picture">
                                                <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Betty Murphy</p>
                                                <small class="text-muteds">Idle</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/9.png"
                                                    alt="Profile Picture">
                                                <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-main">Samantha Reid</p>
                                                <small class="text-muteds">Offline</small>
                                            </div>
                                        </a>
                                    </div>

                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey
                                            K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea
                                            Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span>
                                            Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan
                                            Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                    <div class="pad-hor">
                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold text-main"
                                                href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor
                                            sit amet.
                                        </p>
                                        <small><em>Last Update : Des 12, 2014</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp;
                                            reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making
                                            sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due
                                            On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i
                                                class="demo-pli-information icon-lg icon-fw"></i> Service
                                            Information</a>
                                        <a href="#" class="list-group-item"><i
                                                class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span
                                                class="label label-info pull-right">New</span><i
                                                class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i
                                                class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--===================================================-->



                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">
                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <?php include("../include/layout_admin/sidebar.php") ?>
                    </div>
                    <!--================================-->
                    <!--End menu-->
                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <?php include("../include/layout_admin/footer.php") ?>

        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <!--jQuery [ REQUIRED ]-->
    <script src="../include/jquery.min.js"></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="../include/bootstrap.min.js"></script>
    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="../include/nifty.min.js"></script>
    <script src="../include/dashboard.js"></script>
</body>

</html>