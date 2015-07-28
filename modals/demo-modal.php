
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login-modal">
  Login Ajax Modal
</button>

<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
         
        {exp:zoo_visitor:login_form id="loginForm" json="yes"}
        {error:login}
          <input id="username" name="username" type="text" placeholder="Email" />
          <input id="password" name="password" type="password" placeholder="Password" />
          {if auto_login}
            Remember me? <input class="checkbox" name="auto_login" type="checkbox" value="1" />
          {/if}
          <input name="submit" type="submit" class="login loginmodal-submit" value="Login" />
        {/exp:zoo_visitor:login_form}

          <div class="login-help text-center">
            <a href="#">Register</a> - <a href="#">Forgot Password</a>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#offerToBuyModal">
  offerToBuyModal
</button>

<!-- Modal -->
<div class="modal fade" id="offerToBuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Make and Offer to Buy</h4>
      </div>
      <div class="modal-body">

{exp:freeform:form
  form_id="3"
  form:class="form-horizontal"
  return="contact/index/success" 
  required="first_name|last_name|email|offer_to_buy_price|phone|user_message"
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
      <label for="offer_to_buy_price" class="col-sm-2 control-label modal-label-no-bold">Offer Price:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="offer_to_buy_price" name="offer_to_buy_price[]" placeholder="$100" required>
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
      <label for="lender_contact_me" class="col-sm-9 control-label modal-label-right modal-label-no-bold">
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
    
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg">Make Offer</button>
      {/exp:freeform:form}
      </div>
    </div>
  </div>
</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Show My Favorites Modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>







<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Registration Modal Ajax
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
















