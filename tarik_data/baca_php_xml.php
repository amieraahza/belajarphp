<?php
# https://www.codeproject.com/Tips/1074174/Simple-Way-to-Convert-HTML-Table-Data-into-PHP-Arr
# https://www.codexworld.com/convert-array-to-xml-in-php/
# http://snipplr.com/view/3491/convert-php-array-to-xml-or-simple-xml-object-if-you-wish/
$pusing = array('01','02','03','04','05','06',
'07','08','09','10','11','12');
$year = 2018;

foreach ($pusing as $bln):
	//$setahun = 'http://www.e-solat.gov.my/web/waktusolat.php?zone=JHR04&state=JOHOR&year=2017&jenis=year&bulan=' . $bln . '&LG=BM';
	$setahun = 'http://www.e-solat.gov.my/web/muatturun.php?zone=JHR04&state=JOHOR&jenis=year&lang=my&year='
		. $year . '&bulan=' . $bln . '';
	$htmlContent = file_get_contents($setahun);

	$DOM = new DOMDocument();
	@$DOM->loadHTML($htmlContent);

	//$Header = $DOM->getElementsByTagName('td');
	$Detail = $DOM->getElementsByTagName('font');

	# Get row data/detail table without header name as key
	$senaraiKey = array(0,1,2,3,4,5,6,7,8,9);
	$senaraiTajuk = array('Tarikh','Hari','Imsak','Subuh','Syuruk','Zohor','Asar','Maghrib','Isyak');
	$buangData = array('Januari','Februari','Mac',
	'April','Mei','Jun',
	'Julai','Ogos','September',
	'Oktober', 'November', 'Disember',
	'Disember 2017','Januari 2019');
	$i = $j = $isi = 0;

	foreach($Detail as $kunci => $sNodeDetail) 
	{
		if ( in_array($kunci,$senaraiKey) ):
			$tajuk['tajuk' . $isi++] = trim(
				preg_replace('/\s\s+/', ' ', 
				$sNodeDetail->textContent));
		else:
			//echo '<hr>' . $j . '[' . $i++ . ']='
			//. trim($sNodeDetail->textContent);
			if ( !in_array(trim($sNodeDetail->textContent),$buangData) )
			{
				$dataJadual[trim($j.$bln)][$senaraiTajuk[$i]] = 
					($senaraiTajuk[$i] == 'Tarikh') ? # tambah tahun pada tarikh
					trim($sNodeDetail->textContent) . ' ' . $year
					: trim($sNodeDetail->textContent);
				$i++;
			}
		endif;
		$i = ($i == 9) ? 0 : $i++;
		$j = $i % count($senaraiTajuk) == 0 ? $j + 1 : $j;
	}
	endforeach;

	$dataCantum = array_merge($tajuk, $dataJadual);

	//echo '<pre>';
	//echo 'tajuk->'; print_r($tajuk);
	echo '<hr>data->'; print_r($dataJadual);
	//echo '<pre>dataCantum->'; print_r($dataCantum);

	//buatfailxml($dataCantum, $year);

function buatfailxml($dataCantum, $year)
{
	# creating object of SimpleXMLElement
	$xml_user_info = new SimpleXMLElement("<?xml version=\"1.0\"?><waktu_solat></waktu_solat>");

	# function call to convert array to xml
	include 'class_php_xml.php';
	array_to_xml($dataCantum,$xml_user_info);

	# saving generated xml file
	$namafail = 'waktu_solat_' . $year . '.xml';
	$xml_file = $xml_user_info->asXML($namafail);
	//$xml_file = $xml_user_info->asXML();

	# success and error message based on xml creation
	if($xml_file)
	{
		echo 'XML file have been generated successfully. '
		. '<a target="_blank" href="' . $namafail . '">Click here</a>';
		//echo $xml_file;
	}
	else
	{
		echo 'XML file generation error.';
	}
	//*/
}