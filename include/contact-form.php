<div class="fullContact">    
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 59px;position: absolute; right: 0;padding-right: 50px;">
                <button type="button" class="closeContact pull-right">close</button>
        </div>
    </div>

    <div class='row container'>
        <!--
        <form role="form">
                    <div class="col-md-6 leftContact">
                        <form role="form">
                          <div class="form-group">
                            <input type="text" class="form-control" id="Name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" id="Email" placeholder="E-mail">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="department" placeholder="Type of Enquiry">
                          </div>
                    </div>
                    <div class="col-md-6">

                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                          </div>

                          <button type="submit" class="btn btn-default">Submit</button>
                        
                    </div>  
                                
                </form>
        -->

        <form id="contact" name="contact" method="post">  
          <fieldset>  
            <div class="col-md-6 leftContact">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" size="30" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" size="30" placeholder="E-mail" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" size="30" placeholder="Type of Enquiry"/>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
                </div>
                <input id="submit" class="btn btn-default" type="submit" name="submit" value="Submit" />  
            </div>
          </fieldset>  
        </form>
    </div>

        <div id="success">
          <span>
            <p>Your message was sent successfully! We will be in touch as soon as I can.</p>
          </span>
        </div>

        <div id="error">
          <span>
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </span>
        </div>

</div>