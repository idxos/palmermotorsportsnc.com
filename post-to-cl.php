<?php
class cURL {

    var $headers;
    var $user_agent;

    function cURL()
    {
        $this->headers[] = 'Connection: Keep-Alive';
        $this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
        $this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
    }



    function post($url,$data) {
        $process = curl_init($url);
        curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($process, CURLOPT_HEADER, 1);
        curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POSTFIELDS, $data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($process, CURLOPT_POST, 1);
        $return = curl_exec($process);
        $info = curl_getinfo($process);
        curl_close($process);
        return $info;
    }

}

$postdata = "
{preload_replace:master_channel_name="products"}
{exp:rss:feed channel="products" dynamic_start="on" disable="member_data|pagination"}
<?xml version=\"1.0\" encoding=\"utf-8\"?>\n

<rdf:RDF xmlns=\"http://purl.org/rss/1.0/\"
         xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"
         xmlns:cl=\"http://www.craigslist.org/about/cl-bulk-ns/1.0\">
<channel>
  <items>
    <rdf:li rdf:resource=\"CLTPalmerMotorsportsProducts\"/>
  </items>
  <cl:auth username=\"todd@palmermotorsportsnc.com\"
           password=\"Palmer2015\"
           accountID=\"14\"/>
</channel>
{exp:channel:entries channel="products" dynamic_start="on" disable="member_data|pagination"}

<item rdf:about=\"CLTPalmerMotorsportsProducts\">
  <cl:category>mcd</cl:category>
  <cl:area>CHA</cl:area>
  <cl:replyEmail privacy=\"C\"
                   otherContactInfo=\"(707) 489-1125\">
      Todd@PalmerMotorsportsNC.com
    </cl:replyEmail>
<title>{title}</title>
<description>{product_description}</description>
  <cl:auto_basics auto_fuel_type=\"{product_fuel_type}\"
    auto_make_model=\"{product_make} {product_model}\"
    auto_paint=\"{product_color}\"
    auto_title_status=\"{product_title_status}\"
    engine_displacement_cc=\"{product_engine_type_cc}\"
    auto_transmission=\"{product_transmission}\"
    auto_miles=\"{product_miles}\"
    auto_year=\"{product_year}\"
    auto_vin=\"{product_vin}\"
    />
      <cl:mapLocation city=\"Denver\"
                  state=\"NC\"
                  postal=\"28037\"
                  latitude=\"35.510386\"
                  longitude=\"-81.0032326\"/>
<cl:price>{product_price}</cl:price>
</item>


{/exp:channel:entries}
</rdf:RDF>
{/exp:rss:feed}
";

$cc = new cURL();
$url = 'https://post.craigslist.org/bulk-rss/post';
$output = $cc->post($url,$postdata);

//echo $output;

print_r($output);
