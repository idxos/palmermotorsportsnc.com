
                                <?php
                                    $url = 'http://palmermotorsportsnc.com/assets/palmer-data/downloads-items_by_vendor-json-item-vendor_id=FLY+RACING.json';
                                    $content = file_get_contents($url);
                                    $json = json_decode($content, true);

                                    foreach($json['data']['id'] as $item) {
                                        print $item['list_price'];
                                        print ' - ';
                                        print $item['description'][0]['value'];
                                        print ' - ';
                                        print '<img src="http://www.wpsstatic.com/WPSIMAGES/thumbs/"' 
                                                . $item['image'][0]['value'] 
                                                . '" border="0" alt="" />';
                                        print '<br>';

                                    }
                                ?>
                                