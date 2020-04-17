<section class="rsvp-section section-padding bg-1" id="rsvp">
    <div class="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-md-offset-6 col-sm-10">
                <div class="rspv-form">
                    <h3>Are you attending?</h3>
                    <p>Please kindly response before 14 Feb 2020</p>
                    <div class="left-flower"></div>
                    <div class="right-flower"></div>
                    <form id="rsvp-form" class="clearfix form validate-rsvp-form row" method="post">
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Name*">
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Email*">
                        </div>
                        <div>
                            <select class="form-control" name="guest" >
                                <option disabled selected>Number Of Guest*</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-control" name="events" >
                                <option disabled selected>I Am Attending*</option>
                                <option>Al events</option>
                                <option>Wedding ceremony</option>
                                <option>Reception party</option>
                            </select>
                        </div>
                        <div>
                            <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" class="theme-btn-s2">RSVP NOW</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="success-error-message">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
