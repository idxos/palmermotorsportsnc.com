{exp:freeform:form
    form_id="1"
    form:class="form-horizontal"
    return="contact/index/success" 
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


    <hr>
    <br/>
    <div class="row">
        <p class="text-center">
            <button type="submit" id="submit" name="submit" class="btn btn-danger btn-lg">Send Message</button>
        </p>
    </div><!-- /.row -->
    
        
{/exp:freeform:form}