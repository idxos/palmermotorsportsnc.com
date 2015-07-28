

<!-- Button trigger modal -->
<a class="btn btn-block btn-border btn-post btn-danger" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login-modal">
  Login Ajax Modal
</a>

<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
         
        {exp:zoo_visitor:login_form id="loginForm" return="account/profile" error_handling="inline"
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