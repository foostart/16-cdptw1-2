
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
                                <input maxLength="50" name = "yourname" type="text" class="form-control" id="name" placeholder="Enter your name (1 - 50 characters)...." pattern="{0-9},{1,50}"><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormEmail">Email:</label>
                                <input maxLength="50" name = "email" type="email" class="form-control" id="email" placeholder="Enter your email...."><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormTelephone">Phone Number:</label>
                                <input maxLength="10" name = "tel" type="tel" class="form-control" id="tel" placeholder="Enter your phone number...." pattern="[0-9]{10}"><p class="alert-form-info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label id="contactFormMessage">Message:</label>
                                <textarea name="mess" class="form-control " rows="5" cols="75" id="mess" placeholder="Enter your message...."></textarea><p class="alert-form-info"></p>
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