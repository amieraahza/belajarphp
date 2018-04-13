<?php
//$xmlstring = 'https://www.shopee.com.my/assets/opensearch-my.xml';
$searchItem = 'scarf';
$xmlstring = '<?xml version="1.0"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
  <ShortName>Shopee Malaysia</ShortName>
  <LongName>Shopee Malaysia</LongName>
  <Description>Buy and Sell on Mobile or Online</Description>
  <Tags>shopee</Tags>
  <Url type="text/html"
       rel="results"
       method="get"
       template="https://shopee.com.my/search/?keyword={'.$searchItem.'}" />
</OpenSearchDescription>';
$xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
echo '<pre>';
print_r($xml);
echo '</pre>';
//$json = json_encode($xml);
//$array = json_decode($json,TRUE);