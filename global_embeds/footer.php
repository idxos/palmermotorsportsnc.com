<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log-In</h4>
      </div>
      <div class="modal-body">
         
        {exp:zoo_visitor:login_form id="loginForm" json="yes" error_handling="inline"}
        {error:login}
          <input id="username" name="username" type="text" placeholder="Email" />
          <input id="password" name="password" type="password" placeholder="Password" />
          {if auto_login}
            Remember me? <input class="checkbox" name="auto_login" type="checkbox" value="1" />
          {/if}
          <input name="submit" type="submit" class="login loginmodal-submit" value="Login" />
        {/exp:zoo_visitor:login_form}

          <div class="login-help text-center">
            <a href="account/registration">Register</a> - <a href="account/forgot-password">Forgot Password</a>
          </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
{embed='forms/.modal-offer-to-buy'}






<!-- Modal -->
<div class="modal fade" id="saveAsFave" tabindex="-1" role="dialog" aria-labelledby="saveAsFave">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Save as Favorite</h4>
      </div>
      <div class="modal-body">
        {embed='forms/.modal-details-saveAsFave'}
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div><!--/.modal-saveAsFave-->


<!-- Modal -->
<div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Send a Message</h4>
      </div>
      <div class="modal-body">
        {exp:freeform:form
          form_id="1"
          form:class="form-horizontal"
          return="details/index/success" 
          required="first_name|last_name|email|phone|user_message"
          require_ip="yes"
          require_captcha="yes" 
          user_email_field="email"
          }
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label modal-label-no-bold">Name:</label>
              <div class="col-sm-4">
                  <input type="text" class="form-control" id="first_name" name="first_name[]" placeholder="First Name" required>
              </div>
              <div class="col-sm-4">
                  <input type="text" class="form-control" id="last_name" name="last_name[]" placeholder="Last Name" required>
              </div>
          </div><!-- /.form-group -->

          <div class="form-group">
              <label for="email" class="col-sm-2 control-label modal-label-no-bold">Email:</label>
              <div class="col-sm-8">
                  <input class="form-control" id="email" name="email[]" type="text"  placeholder="name@website.com" required>
              </div>
          </div><!-- /.form-group -->

          <div class="form-group">
              <label for="phone" class="col-sm-2 control-label modal-label-no-bold">Phone:</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="phone" name="phone[]" placeholder="(000) 000-0000" required>
              </div>
          </div><!-- /.form-group -->

          <div class="form-group">
              <label for="user_message" class="col-sm-2 control-label modal-label-no-bold">Message:</label>
              <div class="col-sm-8">
                  <textarea class="form-control" type="text" id="user_message" name="user_message[]"rows="5" required></textarea>
              </div>
          </div><!-- /.form-group -->

          <div class="form-group">
              <div class="col-sm-3 pull-right">
                  <div class="checkbox">
                      <input type="checkbox" id="inventory_updates" name="inventory_updates" checked>
                  </div><!-- /.checkbox -->
              </div>
            <label for="inventory_updates" class="col-sm-9 control-label modal-label-right modal-label-no-bold">
                  Would you like us to send you our inventory updates?
              </label>
          </div><!-- /.form-group -->

          {if freeform:captcha}
              <p>Please enter the word you see in the image below:</p>
              <p>
                  {freeform:captcha}
                  <br />

                  <input type="text" name="captcha" style="width:140px;" />
              </p>
          {/if}

      </div><!--/.modal-body-->
      <div class="modal-footer">
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Send Message</button>
        {/exp:freeform:form}
      </div>
    </div>
  </div>
</div><!--/.modal-contactUs-->





<div class="footer" id="footer">
  <div class="container">
    <ul class=" pull-left navbar-link footer-nav">
      <li><a href="{homepage}"> Home </a> <a href="{site_url}about-us"> About us </a> <a href="{site_url}legal/terms-and-conditions"> Terms and Conditions </a> <a href="{site_url}legal/privacy-policy"> Privacy Policy </a> <a href="{site_url}contact-us"> Contact us </a> <a href="{site_url}faq"> FAQ </a>
      </li>
    </ul>
    <ul class=" pull-right navbar-link footer-nav">
      <li> © 2015 Palmer Motorsports </li>
    </ul>
  </div>
</div>