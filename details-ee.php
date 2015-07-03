{exp:channel:entries channel='products' limit='1'}

<div class="inner inner-box ads-details-wrapper">
    <h2>{product_year} {product_make} {product_model} <small class="label label-default adlistingtype"> {product_engine_type_cc}cc</small></h2>
    <span class="info-row"> 
      <span class="date"><i class="ion-ios-clock"></i>
        {exp:channel:month_links channel="products" limit="1"}{month}{/exp:channel:month_links} {exp:channel:month_links channel="products" limit="1"}{day}{/exp:channel:month_links}, {exp:channel:month_links channel="products" limit="1"}{year}{/exp:channel:month_links}
      </span> - 
      <span class="category">{product_type}</span>- 
      <span class="item-location"><i class="ion-ios-location"></i> Charlotte, NC </span> 
    </span>
    <div class="ads-image">
        <h1 class="pricetag"> ${product_price}</h1>
        <div class="bx-wrapper" style="max-width: 100%;">
        
        
        
          <div class="flexslider">
            <ul class="slides">
              {product_images}
                  <li><img src="{product_images:product_image}" alt="{title}"></li>
              {/product_images}
            </ul>
          </div>


        
    </div><!--ads-image-->
    <div class="Ads-Details">
        <h5 class="list-title"><strong>Product Details</strong></h5>
        <div class="row">
            <div class="ads-details-info col-md-8">
                <p>{product_description}</p>
                <h4>Information</h4>
                <ul class="list-circle">
                    <li>Status: {product_status}</li>
                    <li>Condition: {product_condition}</li>
                    <li>Year: {product_year}</li>
                    <li>Make: {product_make}</li>
                    <li>Model: {product_model}</li>
                    <li>Color: {product_color}</li>
                    <li>Price: ${product_price}</li>
                    <li>MSRP: ${product_msrp}</li>
                    <li>Engine Size: {product_engine_type_cc}cc's</li>
                </ul>
                <h4>Tags</h4>
                <ul>
                  <li>Tag 1</li>
                  <li>Tag 2</li>
                  <li>Tag 3</li>
                </ul>
            </div>
            <div class="col-md-4">
                <aside class="panel panel-body panel-details">
                    <ul>
                        <li>
                            <p class="no-margin"><strong>Price:</strong> ${product_price}</p>
                        </li>
                        <li>
                          <p class="no-margin"><strong>Condition:</strong> {product_status}</p>
                        </li>
                        <li>
                          <p class="no-margin"><strong>Location:</strong> Charlotte, NC </p>
                        </li>
                        <li>
                          <p class="no-margin"><strong>Brand:</strong> {product_make}</p>
                        </li>
                        <li>
                          <p class="no-margin"><strong>Type:</strong> {product_type}</p>
                        </li>
                    </ul>
                </aside>
                <div class="ads-action">
                    <ul class="list-border">
                        <li>
                            <a href="#"> <i class="ion-ios-person size-20"></i> More ads like this </a>
                        </li>
                        <li>
                          <a href="#"> <i class="ion-ios-heart size-20"></i> Save ad </a>
                        </li>
                        <li>
                          <a href="#"> <i class="ion-ios-upload size-20"></i> Share ad </a>
                        </li>
                        <li>
                          <a href="#reportAdvertiser" data-toggle="modal"> <i class="ion-ios-information size-20"></i> Report abuse </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-footer text-left"> 
            <a class="btn  btn-default" data-toggle="modal" href="#contactAdvertiser"><i class="ion-ios-email"></i> Send a message </a> 
            <a class="btn  btn-info" href="tel:17044891125"type="phone"><i class="ion-ios-phone"></i> (704) 489-1125 </a> 
        </div>
    </div>
</div>
