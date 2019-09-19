<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!-- Header-->
<div class="type_524">
    <div class="container menu-container-wrapper">
         <div class="row">
            <div id="tp-top-bar" class="vc_row tp-top-bar" >
                <div class="container">
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icon-ft pull-">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class=" wpb_content_element text-right">
                            <ul class="links">
                                <li><a class="highlight" href="#">24/7 Support | +1 959 603 6035</a></li>
                                <li><a href="#">Helps</a></li>
                                <li><a href="#">FAQ’s</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Change Location</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vc_row header-row tp-navigations vc_custom_1437478756869">
                <div class="sticky-wrapper">
                    <div class="header-row stuck">
                        <div class="container">
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                <div class=" vc_custom_1438140764928">
                                    <a class="navbar-brand">
                                        <img src="images/Steel-Product.png" alt="#log0"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <nav class="navbar navbar-default">
                                 
                                    <div class="navbar-header">
                                        <!-- icon responsive-->
                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <div class="navbar-collapse collapse in">
                                        <!-- tab dropdown menu of Women-->
                                            <ul id="menu-indus-v3" class="nav navbar-nav navbar-right">
                                                <li class=" current-menu-item menu-item-has-children parent-current-menu-item">
                                                    <a href="#" class=" dropdown-toggle">Home</a>
                                                    <a class="caret-click" data-toggle="dropdown"> 
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="current-menu-item item1">
                                                            <a class="s1" href="#home">Home</a>
                                                            <a class="caret-click"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#homev2">Home v2</a>
                                                            <a class="caret-click"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#index1">Index Header Style 01</a>
                                                            <a class="caret-click"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=" menu-item-has-children">
                                                <a href="#" class=" dropdown-toggle">Company Profile</a>
                                                <a class="caret-click" href="#item"> 
                                                    <span class="caret"></span>
                                                </a>
                                                
                                            </li>
                                            <li class=" menu-item-has-children">
                                                <a href="#" class=" dropdown-toggle">Product</a>
                                                <a class="caret-click" data-toggle="dropdown"> 
                                                    <span class="caret"></span>
                                                </a>
                                               
                                            </li>
                                            <li class=" menu-item-has-children">
                                                <a href="#" class=" dropdown-toggle">News</a>
                                                <a class="caret-click" data-toggle="dropdown"> 
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">Blog List</a>
                                                        <a class="caret-click" data-toggle="dropdown"> 
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="#">With Right Sidebar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">With Left Sidebar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">With No Sidebar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class="dropdown-toggle">Single Layout</a>
                                                        <a class="caret-click" href="#"> 
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="#">No SideBar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">With Left Sidebar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">With Right Sidebar</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" menu-item-has-children">
                                                <a href="#" class=" dropdown-toggle">Page</a>
                                                <a class="caret-click" href="#"> 
                                                    <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li class=" menu-item-has-children">
                                                <a href="#" class=" dropdown-toggle">Service</a>
                                                <a class="caret-click" href="#"> 
                                                    <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Contact Us</a>
                                                <a class="caret-click"></a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
