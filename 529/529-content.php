<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type_667 ">
    <div class="container column-wrapper-container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wpb_text_column wpb_content_element ">
                    <h1 style="text-align: center;">Provides a Wide Range of Products</h1>
                </div>
                <div class="filter-wrapper">
                    <div class="portfolioFilter ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#0" class="btn-outline"> All</a>
                            </li> 
                            <li>
                                <a href="#1" class="btn-outline1">Bars</a>
                            </li>
                            <li>
                                <a href="#2" class="btn-outline2">Copper Base</a>
                            </li>
                            <li>
                                <a href="#3" class="btn-outline3">Plates</a>
                            </li>
                            <li>
                                <a href="#4" class="btn-outline4">Rails</a>
                            </li>
                            <li>
                                <a href="#5" class="btn-outline5">Rolled</a>
                            </li>
                            <li>
                                <a href="#6" class="btn-outline6">Sheet Steel</a>
                            </li>
                            <li>
                                <a href="#7" class="btn-outline7">Steel Forgings</a>
                            </li>
                            <li>
                                <a href="#8" class="btn-outline8">Steel Pipes</a>
                            </li>
                        </ul>
                    </div>

                    <div class="portfolioContainer " style=" overflow: hidden; height: auto; padding-right: 24px;">
                        <div class="in active">
                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">
                                    <div class="box image-scale">
                                        <img  src="images/1.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Bars</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">
                                    <div class="box image-scale" >
                                        <img  src="images/2.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Plates</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">
                                    <div class="box image-scale" >
                                        <img  src="images/3.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Steel Rails</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">
                                    <div class="box image-scale">
                                        <img  src="images/4.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Steel Forgings</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item" >
                                    <div class="box image-scale">
                                        <img  src="images/5.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Shipping Project</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item" >
                                    <div class="box image-scale">
                                        <img  src="images/6.jpg" alt="" style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Copper Base</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">
                                    <div class="box image-scale">
                                        <img src="images/7.jpg" alt=""  style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Food Service</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-5">
                                <div class="isotope-item">                                           
                                    <div class="box image-scale">
                                        <img src="images/8.jpg" alt=""  style="display: block;">
                                        <div class="caption scale-caption">
                                            <a href="#">
                                                <h1>Steel Pipes</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>