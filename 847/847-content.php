
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>


        <header>
            <div class="type-15">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 border">
                        <div class="noidung">
                            <p>Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label id="contactFormName">Your Name:</label>
                                <input maxlength = "30" type="text" class="form-control " placeholder="Ban hay nhap your name chi 30 ky tu....."><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormEmail">Email:</label>
                                <input maxlength = "30" type="email" class="form-control " placeholder="Ban hay nhap email chi 30 ky tu....."><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormTelephone">Phone Number:</label>
                                <input maxlength = "10" type="tel" class="form-control " placeholder="Ban hay nhap phone number chi 10 ky tu....."><p class="alert-form-info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label maxlength = "10" id="contactFormMessage">Message:</label>
                                <textarea class="form-control " rows="5" cols="75" ></textarea><p class="alert-form-info"></p>
                            </div>
                        </div>
                        <div class="btn-toolbar form-group">
                            <input type="submit" value="Send" class="btn btn-alt"><p class="alert-form-info"></p>
                            <input type="reset" value="Clear" class="btn btn-info"><p class="alert-form-info"></p>
                        </div>
                    </div>


                    <!--End Header Top-->

                </div>
             </div>
        </header>