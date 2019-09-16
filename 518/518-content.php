<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-518">  
    <div class="container">
        <div class="row">
            <div class=" navbar-collapse" >
                <div class="col-md-6 col-sm-8 col-xs-8">
                    <!-- menu left-->
                    <div class="navbar-header">
                        <div class="hotline"><i class="fa fa-phone">Call <a  href="#" >+001 555 801</a></i></div>
                    </div>
                    <ul class="nav navbar-nav navbar-left list1">
                        <li class="dropdown mega-dropdown">
                            <a href="#" >All demos</a>		
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" >Features</a>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#"  >Buy me! </a>		
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" >Welcome msg! </a>
                        </li>                                                                                    
                    </ul>
                    <!-- menu left-->
                </div>
                <div class="col-md-6 col-sm-4 col-xs-4">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- menu right-->
                        <li >
                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>

                            <ul class="dropdown-menu">
                                <li> 
                                    <div class="icon">
                                        <span class="label dropdown-icon bg1" >&nbsp;</span>
                                        <a href="#">English</a>
                                    </div>
                                </li>
                                <li> 
                                    <div class="icon">
                                        <span class="label dropdown-icon bg2" >&nbsp;</span>
                                        <a href="#">German</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- menu right-->
                        <!-- DropDown-->
                        <li >
                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">BRL</a></li>
                                <li><a href="#">GBP</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">CNY</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="detail">
                <div class="row">   
                    <div class="col-md-12">
                        <!-- logo-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="imgcenter">
                                <img  src="<?php echo $url_path ?>/images/img/logo-1.png" alt="" id="col1"/>
                            </div>
                        </div>
                        <!-- seach-->
                        <div class="col-md-4 col-sm-6 col-xs-8">
                            <div class="search-container">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-4">
                            <div class="topnav" id="myTopnav">
                                <a href="#home" class="active">Home</a>
                                <a href="#news">News</a>
                                <div class="dropdown">
                                    <button class="dropbtn">Dropdown 
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div> 
                                <a href="#about">About</a>
                                <a href="#" class="icon" onclick="myFunction()">&#9776;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



