
        <header>
		<form action="847.php" method="post">
            <div class="type-15">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 border">
                        <div class="noidung">
                            <p>Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.</p>
                        </div>
                        <div class="row" id="form1">
                            <div class="col-sm-4 form-group">
                                <label id="contactFormName">Your Name:</label>
                                <input maxLength="50" name = "yourname" type="text" class="form-control" id="name" placeholder="Enter your name (1 - 50 characters)...."><p class="alert-form-info"></p>
								<span id="name"></span>
						   </div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormEmail">Email:</label>
                                <input maxLength="50" name = "email" type="text" class="form-control" id="email" placeholder="Enter your email...." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><p class="alert-form-info"></p>
								<span id="email"></span>
							</div>
                            <div class="col-sm-4 form-group">
                                <label id="contactFormTelephone">Phone Number:</label>
                                <input maxLength="10" name = "tel" type="text" class="form-control" id="tel" placeholder="Enter your phone number...." pattern="[0-9]{10}"><p class="alert-form-info"></p>
								 
							</div>
                        </div>
                        <div class="row" id="form1">
                            <div class="col-sm-12 form-group">
                                <label id="contactFormMessage">Message:</label>
                                <textarea name="mess" class="form-control " rows="5" cols="75" id="message" placeholder="Enter your message...."></textarea><p class="alert-form-info"></p>
                            </div>
                        </div>
                        <div class="btn-toolbar form-group">
                            <input type="submit" id="Send" value="Send" class="btn btn-alt"><p class="alert-form-info"></p>
                            <input type="reset"  id="btnClear" value="Clear" class="btn btn-info"><p class="alert-form-info"></p>
                        </div>
                    </div>
                    <!--End Header Top-->
                </div>
             </div>
		</form>
        </header>