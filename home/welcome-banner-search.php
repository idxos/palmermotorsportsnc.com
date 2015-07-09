
<form action="#" method="GET" class="form demo_form">
    <div class="fs-row">
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Basic</h4>
            <fieldset class="form_fieldset">
                <label for="demo_basic" class="form_label">Label</label>
                <select name="demo_basic" id="demo_basic">
                    <option data-label="Option One">One</option>
                    <option data-label="Option Two">Two</option>
                </select>
            </fieldset>
            <h4>Option Groups</h4>
            <fieldset class="form_fieldset">
                <label for="demo_groups" class="form_label">Label</label>
                <select name="demo_groups" id="demo_groups">
                    <optgroup label="Group One">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </optgroup>
                    <optgroup label="Group One">
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                    </optgroup>
                    <optgroup label="Group Three">
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </optgroup>
                </select>
            </fieldset>
            <h4>Default Label</h4>
            <fieldset class="form_fieldset">
                <label for="demo_label" class="form_label">Label</label>
                <select name="demo_label" id="demo_label" data-dropdown-options='{"label":"Select A State"}'>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX"> Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Multiple</h4>
            <fieldset class="form_fieldset">
                <label for="demo_multiple" class="form_label">Label</label>
                <select name="demo_multiple" id="demo_multiple" multiple>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six</option>
                    <option value="7">Seven</option>
                    <option value="8">Eight</option>
                    <option value="9">Nine</option>
                    <option value="10">Ten</option>
                </select>
            </fieldset>
        </div>
    </div>
    <div class="fs-row">
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Links</h4>
            <fieldset class="form_fieldset">
                <label for="demo_links" class="form_label">Label</label>
                <select name="demo_links" id="demo_links" data-dropdown-options='{"label":"Jump Sites","links":true}'>
                    <option value="http://google.com">Google Search</option>
                    <option value="http://boingboing.com">Boing Boing</option>
                    <option value="http://cnn.com">CNN News</option>
                </select>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>External Links</h4>
            <fieldset class="form_fieldset">
                <label for="demo_external" class="form_label">Label</label>
                <select name="demo_external" id="demo_external" data-dropdown-options='{"label":"Jump Sites","external":"true"}'>
                    <option value="http://google.com">Google Search</option>
                    <option value="http://boingboing.com">Boing Boing</option>
                    <option value="http://cnn.com">CNN News</option>
                </select>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Cover</h4>
            <fieldset class="form_fieldset">
                <label for="demo_cover" class="form_label">Label</label>
                <select name="demo_cover" id="demo_cover" data-dropdown-options='{"cover":"true"}'>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Custom Class</h4>
            <fieldset class="form_fieldset">
                <label for="demo_custom" class="form_label">Label</label>
                <select name="demo_custom" id="demo_custom" data-dropdown-options='{"customClass":"custom"}'>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Disable</h4>
            <fieldset class="form_fieldset">
                <label for="demo_disable" class="form_label">Label</label>
                <select name="demo_disable" id="demo_disable" disabled>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                <button type="button" class="form_button toggle">Enable</button>
            </fieldset>
        </div>
        <div class="fs-cell fs-sm-half fs-md-half fs-lg-half">
            <h4>Disable Item</h4>
            <fieldset class="form_fieldset">
                <label for="demo_disable_item" class="form_label">Label</label>
                <select name="demo_disable_item" id="demo_disable_item">
                    <option value="1" disabled>One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                <button type="button" class="form_button toggle toggle_item">Enable Item '1'</button>
            </fieldset>
        </div>
    </div>
</form>

