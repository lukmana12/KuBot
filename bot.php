<?php
date_default_timezone_set('Asia/Jakarta');
require_once("sdata-modules.php");

$config['deviceCode'] 		= '862472031636671';
$config['tk'] 				= 'ACE99-oMERJOpqKlkL46Hk0vvOvCvrDZ659xdHRodw';
$config['token'] 			= '0fb2JZL5zs2RZjUurbcGO37fNdR524ZIffec_n5YJXj2bysvQArElAGf65ePI_UDwtAJlzXMAhkzans';
$config['uuid'] 			= '7d851433b18143509fc202f8e8cce6a2';
$config['sign'] 			= '07932da983d3ee2d80078b6c85de4431';
$config['android_id'] 		= '810c526521573bab';

@system("clear");
$blue="\033[1;34";
$cyan="\033[1;36m";
$green="\033[1;34m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$purple="\033[1;35m";
$red="\033[1;31m";
$yellow="\033[1;33m";

print "$purple
[!]===================================[!]
[!]==//$okegreen         Kubik Bot$purple         //==[!]
[!]==//$red      Auto Claim Poin$purple      //==[!]
[!]===================================[!]
[!]==//$yellow   By$red  >>$okegreen  N1ght.Hax0r $purple    //==[!]
[!]==//$yellow   FB$red  >>$okegreen  Putra AR $purple       //==[!]
[!]===================================[!]
";

print "$purple
[*]===================================[*]
[*]==//$okegreen           Menu$purple            //==[*]
[*]===================================[*]
[1]==//$yellow      Claim Kubik Poin$purple     //==[1]
[2]==//$yellow      Your Information$purple     //==[2]
[3]==//$yellow           About$purple           //==[3]
[*]===================================[*]
$okegreen
[$cyan Input Menu$okegreen ]==//$white ";
$pilihan = trim(fgets(STDIN));

if ($pilihan == '1' OR $pilihan == 'C' OR $pilihan == 'c' OR $pilihan == '01' OR $pilihan == 'Claim' OR $pilihan == 'claim' OR $pilihan == 'CLAIM')
{
	@system("clear");
	print "$yellow
[*]==// Please Wait
$white
";
}
elseif ($pilihan == '2' OR $pilihan == 'I' OR $pilihan == 'i' OR $pilihan == '02' OR $pilihan == 'Info' OR $pilihan == 'info' OR $pilihan == 'INFO')
{
	@system("clear");
	print "$yellow
[*]==// Your Information List\n\n";

	print "$okegreen [$purple deviceCode$okegreen ]==//$white ".$config['deviceCode']."\n";
	print "$okegreen [$purple     tk$okegreen     ]==//$white ".$config['tk']."\n";
	print "$okegreen [$purple    token$okegreen   ]==//$white ".$config['token']."\n";
	print "$okegreen [$purple    uuid$okegreen    ]==//$white ".$config['uuid']."\n";
	print "$okegreen [$purple    sign$okegreen    ]==//$white ".$config['sign']."\n";
	print "$okegreen [$purple android_id$okegreen ]==//$white ".$config['android_id']."\r\n";

	print "$yellow
[*]==// You can change it on this script\n";

	print "$okegreen
[$cyan Continue (Y/N)?$okegreen ]==//$white ";
	$pilcon = trim(fgets(STDIN));
	if ($pilcon == 'Y' OR $pilcon == 'y')
	{
		@system("clear");
		print "$yellow
[*]==// Please Wait
$white
";
	}
	elseif ($pilcon == 'N' OR $pilcon == 'n')
	{
		exit;
	}
	else
	{
		@system("clear");
		print "$red
[!]==// Abort !!$white


";
		exit;
	}
}
elseif ($pilihan == '3' OR $pilihan == 'A' OR $pilihan == 'a' OR $pilihan == '03' OR $pilihan == 'About' OR $pilihan == 'about' OR $pilihan == 'ABOUT')
{
	@system("clear");
	print "$yellow
[*]==// About This Tool\n\n";

	print "$white
Kami segenap anggota team Hax7 mengucapkan Terimakasih karena sudah menggunakan tool buatan kami (Sebenarnya buatan Saya sendiri). Kami membuat tool ini karena kami termotivasi dengan banyaknya para pecinta receh yang masih berkeliaran di masyarakat (Termasuk Saya). Karena itu, kami pun membuat tool ini untuk membantu para tuyul untuk mendapatkan tumbalnya.";

	print "$yellow
\n\n[*]==// About Author\n\n";

	print "$okegreen
[ Bio  ]==//$white Noob Coder from Antah Berantah. Semangat karena dibully, pintar karena internet.$okegreen
[ Nama ]==//$white Rakka Pratama Putra$okegreen
[ TTL  ]==//$white Karawang, 16 Agustus 2003$okegreen
[ Nick ]==//$white N1ght.Hax0r$okegreen
";

	print "$okegreen
[$cyan Continue (Y/N)?$okegreen ]==//$white ";
	$pilcon = trim(fgets(STDIN));
	if ($pilcon == 'Y' OR $pilcon == 'y')
	{
		@system("clear");
		print "$yellow
[*]==// Please Wait
$white
";
	}
	elseif ($pilcon == 'N' OR $pilcon == 'n')
	{
		exit;
	}
	else
	{
		@system("clear");
		print "$red
[!]==// Abort !!$white


";
		exit;
	}
}
else
{
	@system("clear");
	print "$red
[!]==// Abort !!$white


";
	exit;
}

for ($x=0; $x <1; $x++) { 
	$url 	= array(); 
	for ($cid=0; $cid <20; $cid++) { 
		for ($page=0; $page <10; $page++) { 
			$url[] = array(
				'url' 	=> 'http://api.beritaqu.net/content/getList?cid='.$cid.'&page='.$page,
				'note' 	=> 'optional', 
			);
		}
		$ambilBerita = $sdata->sdata($url); unset($url);unset($header);
		foreach ($ambilBerita as $key => $value) {
			$jdata = json_decode($value[respons],true);
			foreach ($jdata[data][data] as $key => $dataArtikel) {
				$artikel[] = $dataArtikel[id];
			}
		}
		$artikel = array_unique($artikel);
		print ("$okegreen [$cyan".$cid."$okegreen]==[$purple C.I.D$okegreen ]==//$white ".count(array_unique($artikel))."\r\n");
	}
	print "$okegreen ";
	@system("clear");
	while (TRUE) {
		$timeIn30Minutes = time() + 30*60;
		$rnd 	= array_rand($artikel); 
		$id 	= $artikel[$rnd];
		$url[] = array(
			'url' 	=> 'http://api.beritaqu.net/timing/read',
			'note' 	=> $rnd, 
		);
		$header[] = array(
			'post' => 'OSVersion=8.0.0&android_channel=google&android_id='.$config['android_id'].'&content_id='.$id.'&content_type=1&deviceCode='.$config['deviceCode'].'&device_brand=samsung&device_ip=114.124.239.'.rand(0,255).'&device_version=SM-A730F&dtu=001&lat=&lon=&network=wifi&pack_channel=google&time='.$timeIn30Minutes.'&tk='.$config['tk'].'&token='.$config['token'].'&uuid='.$config['uuid'].'&version=10047&versionName=1.4.7&sign='.$config['sign'], 
		);
		$respons = $sdata->sdata($url , $header); 
		unset($url);unset($header);
		foreach ($respons as $key => $value) {
			$rjson = json_decode($value[respons],true);
			print "[ ".$id." ]==[ ".count($artikel).") ]==// ".$rjson['data']['amount']." Point\n[ Message ]==// ".$rjson['message']."\r\n";
			if($rjson[code] == '-20003' || $rjson['data']['current_read_second'] == '330' || $rjson['data']['amount'] == 0){
				unset($artikel[$value[data][note]]);
			}
		}
		if(count($artikel) == 0){
			sleep(30);
			break;
		}
		sleep(5);
	}
	$x++;
}
