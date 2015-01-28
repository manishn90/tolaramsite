<div class="fullContact">    
    <div class="row">
        <div class="col-md-12" style="position: absolute;right: 0;padding-right: 25px;top: 0;">
                <button type="button" class="closeContact pull-right">close</button>
        </div>
    </div>

    <div class='row container'>

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
                    <input type="text" class="form-control" name="type" id="type" size="30" placeholder="Type of Enquiry"/>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
                </div>
                <input id="submit" class="btn btn-default pull-right" type="submit" name="submit" value="Submit" />  
            </div>
          </fieldset>  
        </form>
    </div>

        <div id="success">
          <span>
            <p>Your message was sent successfully. Thank you.</p>
          </span>
        </div>

        <div id="error">
          <span>
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </span>
        </div>

</div>