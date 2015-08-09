{exp:freeform:form
          form_id="1"
          form:class="form-horizontal"
          return="details/index/success" 
          required="first_name|last_name|email|phone|user_message"
          require_ip="yes"
          require_captcha="yes" 
          user_email_field="email"
          }

    <fieldset>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="first_name[]" id="first_name" type="text" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="last_name[]" id="last_name" type="text" placeholder="Last Name" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="phone[]" id="phone" type="text" placeholder="Phone" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="email[]" id="email" type="text" placeholder="Email Address" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
            
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control" id="user_message" name="user_message[]" placeholder="Enter your massage for us here." rows="7" required></textarea>
                    </div>
                </div>
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
                    <p>{freeform:captcha}<br /><input type="text" name="captcha" style="width:140px;" /></p>
                {/if}

                <div class="form-group">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </fieldset>

{/exp:freeform:form}