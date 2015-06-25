<form class="form-inline">

    <div class="form-group">
        <label for="yearSearchFrom">Year From</label>
        <select class="form-control" type="text" id="yearSearchFrom">
            <option value="-1">All</option>
            <option value="2016">2016 (3)</option>
            <option value="2015">2015 (134)</option>
            <option value="2014">2014 (22)</option>
            <option value="2013">2013 (5)</option>
            <option value="2012">2012 (1)</option>
            <option value="2011">2011 (3)</option>
            <option value="2010">2010 (1)</option>
            <option value="2007">2007 (6)</option>
            <option value="2006">2006 (2)</option>
            <option value="2004">2004 (2)</option>
        </select>
    </div>

    <div class="form-group">
        <label for="yearSearchFrom">Year To</label>
        <select class="form-control" id="yearSearchTo">
            <option value="-1">All</option>
            <option value="2016">2016 (3)</option>
            <option value="2015">2015 (134)</option>
            <option value="2014">2014 (22)</option>
            <option value="2013">2013 (5)</option>
            <option value="2012">2012 (1)</option>
            <option value="2011">2011 (3)</option>
            <option value="2010">2010 (1)</option>
            <option value="2007">2007 (6)</option>
            <option value="2006">2006 (2)</option>
            <option value="2004">2004 (2)</option>
        </select>
    </div>

    <span class="well">
        <label class="checkbox-inline">
            <input type="checkbox" id="new" value="new"> New
        </label>

        <label class="checkbox-inline">
            <input type="checkbox" id="used" value="used"> Used
        </label>

        <label class="checkbox-inline">
            <input type="checkbox" id="certified" value="certified"> Certified
        </label>
    </span>



    <div class="form-group">
      <label class="control-label" for="yearSearchTo">Sory By:</label>
        <select class="form-control" id="soryByType">
            <option value="MakeModel">Make / Model</option>
            <option value="Certified">Certified</option>
            <option value="Condition">Condition</option>
            <option value="eBayAuctions">eBay Auctions</option>
            <option value="InternetSpecials">Internet Specials</option>
            <option value="Mileage">Mileage</option>
            <option value="Price">Price</option>
            <option value="StockNumber">Stock Number</option>
            <option value="Type">Type</option>
            <option value="Year">Year</option>
        </select><select class="a123BaseBrdShadow a123BaseFillLt a123BaseFillLt a123InputWide a123BaseText">
            <option value="MakeModel">Make / Model</option>
            <option value="Certified">Certified</option>
            <option value="Condition">Condition</option>
            <option value="eBayAuctions">eBay Auctions</option>
            <option value="InternetSpecials">Internet Specials</option>
            <option value="Mileage">Mileage</option>
            <option value="Price">Price</option>
            <option value="StockNumber">Stock Number</option>
            <option value="Type">Type</option>
            <option value="Year">Year</option>
        </select>
    </div>



  <button type="submit" class="btn btn-default">Search</button>
</form>

