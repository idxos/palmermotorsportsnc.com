{exp:search:simple_form 
    channel="products"
    form_id="searchForm"
    search_in="titles|product_make|product_model|product_price|product_type|product_engine_type|product_engine_type_cc" 
    result_page="products/search-results"
    no_result_page="products/search-results-none"
    }       
    <input type="text" class="form-control locinput input-rel searchtag-input has-icon" name="keywords" id="keywords" placeholder="I'm looking for a ..." value="">
{/exp:search:simple_form}



<div class="intro">
    <div class="dtable hw100">
        <div class="dtable-cell hw100">
            <div class="container text-center">
                <h1 class="intro-title animated fadeInDown"> Palmer Motorsports</h1>
                <p class="sub animateme fittext3 animated fadeIn"> (704) 489-1125 </p>
                <div class="row search-row animated fadeInUp">
                    <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                        <i class="ion-ios-map icon-append"></i>
                        <input type="text" name="country" id="autocomplete-ajax" class="form-control locinput input-rel searchtag-input has-icon" placeholder="City/Zipcode..." value="" autocomplete="off">
                    </div>
                    <div class="col-lg-4 col-sm-4 search-col relative"> <i class="ion-ios-speedometer icon-append"></i>
                        {exp:search:simple_form 
                            channel="products"
                            form_id="searchForm"
                            search_in="titles|product_make|product_model|product_price|product_type|product_engine_type|product_engine_type_cc" 
                            result_page="products/search-results"
                            no_result_page="products/search-results-none"
                            }       
                            <input type="text" class="form-control locinput input-rel searchtag-input has-icon" name="keywords" id="keywords" placeholder="I'm looking for a ..." value="">
                        {/exp:search:simple_form}
                    </div>
                    <div class="col-lg-4 col-sm-4 search-col">
                        <button class="btn btn-primary btn-search btn-block"><i class="ion-ios-search-strong"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{exp:search:search_results}
    <div class="item-list">
        <div class="col-sm-2 no-padding photobox">
            <div class="add-image"><span class="photo-count"><i class="ion-ios-camera"></i> 2 </span>
                <a href="{title_permalink='products_beta/details'}">
                    <img class="thumbnail no-margin" src="{product_image_thumb}" alt="Photo of {title}">
                </a>
            </div>
        </div>
        <div class="col-sm-7 add-desc-box">
            <div class="add-details">
                <h5 class="add-title"> 
                    <a href="{title_permalink='products_beta/details'}">{title}</a>
                </h5>
                <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="{title}">B </span>

                <span class="date"><i class="ion-ios-calendar-outline"></i> 
                {exp:channel:month_links channel="products" limit="1"}{month}{/exp:channel:month_links} {exp:channel:month_links channel="products" limit="1"}{day}{/exp:channel:month_links}, {exp:channel:month_links channel="products" limit="1"}{year}{/exp:channel:month_links}
                </span> - <span class="category">{product_type} </span>- <span class="item-location"><i class="ion-ios-location"></i> Charlotte, NC </span></span>
            </div>
        </div>
        <div class="col-sm-3 text-right price-box">
            <h2 class="item-price"> $ {product_price}</h2>
            <a class="btn btn-default btn-sm make-favorite"> <i class="ion-ios-heart"></i> <span>Save</span> </a>
        </div>
    </div>
{/exp:search:search_results}











