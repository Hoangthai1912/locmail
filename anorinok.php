<?php
date_default_timezone_set('Europe/London');
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
@system('clear');
$t=
$trang."\033[1;\033[1;37m░█████╗░███╗░░██╗  \033[1;36m░█████╗░██████╗░██╗███╗░░██╗";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m██╔══██╗████╗░██║  \033[1;36m██╔══██╗██╔══██╗██║████╗░██║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m███████║██╔██╗██║  \033[1;36m██║░░██║██████╔╝██║██╔██╗██║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
  $t=
 $trang."\033[1;\033[1;37m██╔══██║██║╚████║  \033[1;36m██║░░██║██╔══██╗██║██║╚████║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
  $t=
 $trang."\033[1;\033[1;37m██║░░██║██║░╚███║  \033[1;36m╚█████╔╝██║░░██║██║██║░╚███║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m╚═╝░░╚═╝╚═╝░░╚══╝  \033[1;36m░╚════╝░╚═╝░░╚═╝╚═╝╚═╝░░╚══╝\n";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	back:
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
//codekey
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
echo"\033[1;35mLink Mua Key : \033[1;33mhttps://anorintool.tk\n";
echo"\033[1;32mNhập Key Đã Mua : \033[1;33m";
$key_tool = trim(fgets(STDIN));
$get_qdc = json_decode(file_get_contents("https://anorintool.tk/api_key/check_key.php?key=".$key_tool), true);
$ngay_mua = $get_qdc['create']; //ngày mua
$han_key = $get_qdc['end']; //người mua
$ip_ad = $get_qdc['ip']; //ip trên key
if($get_qdc['status'] == "error") {
echo $red.$get_qdc['msg'];
exit();
} else if($ngay_mua == $han_key){
echo "\33[1;36m[\33[1;31m🔒\33[1;36m]\33[1;37m ⇒\33[1;31m Key Đã Hết Hạn";
exit();
} else {
if($get_qdc['status'] == "success") {
echo "\33[1;32m[\33[1;33m🔓\33[1;32m]\33[1;37m ⇒\33[1;32m Api Key Chính Xác";
sleep(2);
} else {
echo "\33[1;36m[\33[1;31m🔒\33[1;36m]\33[1;37m ⇒\33[1;31m Api Key Không Hợp Lệ";
exit();
}
}
@system('clear');
$t=
$trang."\033[1;\033[1;37m░█████╗░███╗░░██╗  \033[1;36m░█████╗░██████╗░██╗███╗░░██╗";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m██╔══██╗████╗░██║  \033[1;36m██╔══██╗██╔══██╗██║████╗░██║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m███████║██╔██╗██║  \033[1;36m██║░░██║██████╔╝██║██╔██╗██║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
  $t=
 $trang."\033[1;\033[1;37m██╔══██║██║╚████║  \033[1;36m██║░░██║██╔══██╗██║██║╚████║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
  $t=
 $trang."\033[1;\033[1;37m██║░░██║██║░╚███║  \033[1;36m╚█████╔╝██║░░██║██║██║░╚███║";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
  echo $trang."\n";
$t=
 $trang."\033[1;\033[1;37m╚═╝░░╚═╝╚═╝░░╚══╝  \033[1;36m░╚════╝░╚═╝░░╚═╝╚═╝╚═╝░░╚══╝\n";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
  }
echo"\033[1;32m╔═════════════════════╗\n";
echo"\033[1;32m║  \033[1;33mThông Tin Key \033[1;32m     ║\n";
echo"\033[1;32m╚═════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mTên Người Mua: ".$vang.$get_qdc['name']; //người mua
echo "\n";
echo $do."[".$luc."✅".$do."] ".$trang."=> ".$luc."Ngày Mua     : ".$vang.$get_qdc['create']; //ngày mua
echo "\n";
echo $do."[".$luc."✅".$do."] ".$trang."=> ".$luc."Ngày Hết Hạn : ".$vang.$get_qdc['end']; //ngày hết hạn
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
echo"\033[1;31m\033[1;37m\n";
$cuongvip = $do."[".$do."✅".$do."]";
$n_truoc = date("d");
$ngay = date("d"); $thang = date("m"); $nam = date("Y"); $a=date('d');  $b=date("m"); $thoigian=date('d/m'); $day = []; $day= date('d-m-y'); $today = date("d-m-y"); $d = date("d-m");$ip = file_get_contents('http://kiemtraip.com/raw.php');
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$sr = "\033[1;97m➻❥\033[1;92m ";
echo"\033[1;32m╔═════════════════════╗\n";
echo"\033[1;32m║    \033[1;33mTin Tức Mới      \033[1;32m║\n";
echo"\033[1;32m╚═════════════════════╝\n";
echo"\033[1;37m- \033[1;36mTrang rút gọn loptelink vừa scam mình 2 triệu hãy tránh xa nó ra\n";
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║ \033[1;33m  Trao đổi sub     \033[1;32m   ║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mtds cookie\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mtds token\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mtds tiktok\n";
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║\033[1;33m  Tool Tương Tác Chéo";echo "\033[1;32m  ║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mttc cookie\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m5\033[1;31m] \033[1;32mttc token\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m6\033[1;31m] \033[1;32mttc tiktok\n";
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║\033[1;33m  Like Tây và Like Việt";echo "\033[1;32m║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m7\033[1;31m] \033[1;32mmachine liker\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m9\033[1;31m] \033[1;32mrpwliker\n";
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║ \033[1;33m INSTAGRAM";echo "\033[1;32m            ║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m10\033[1;31m] \033[1;32mVIPIG\n";
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║ \033[1;33m CÔNG CỤ FACEBOOK \033[1;32m    ║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m11\033[1;31m] \033[1;32mnuôi nick Facebook\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m12\033[1;31m] \033[1;32mShare ảo bắng page v1\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m13\033[1;31m] \033[1;32mShare ảo bắng page v2\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m14\033[1;31m] \033[1;32mThêm bạn bè\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m15\033[1;31m] \033[1;32mHuỷ follow \033[1;31m(Đã bảo trì)\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m16\033[1;31m] \033[1;32mlọc bạn bè không tương tác \033[1;31m(Đã bảo trì\033[1;31m)\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Sổ \033[1;31m[\033[1;33m17\033[1;31m] \033[1;32mSPAM COMMENT GROUP \033[1;31m(\033[1;31mĐã bảo trì\033[1;31m)\n";
echo"\033[1;33m════════════════════════\n";
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;37m===>: \033[1;33m";
$phongvaotool = trim(fgets(STDIN));//cái này k được xóa nếu xóa sẽ không vào được tools
if ($phongvaotool == '1'){
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	eval(get('https://run.mocky.io/v3/eb537ccd-2728-46b3-8c77-1307d08fb3f3'));
}else if ($phongvaotool == '2'){
	eval(get('https://run.mocky.io/v3/b5bc3c65-ed77-4a10-b033-8b643ec2ccaf'));
}else if ($phongvaotool == '3'){
eval(get('https://run.mocky.io/v3/67deaceb-8452-4639-8e48-abf696859b3b'));
}else if ($phongvaotool == '4'){
eval(get('https://run.mocky.io/v3/cf04b237-dc2f-4a73-b897-e7430b9c310e'));
}else if ($phongvaotool == '5'){ 
eval(get('https://run.mocky.io/v3/2fc80043-9008-4fb3-a40d-b3e25cdc2f73'));
}else if ($phongvaotool == '6'){
eval(get('http://phongvip.tk/code/code46/t%C6%B0%C6%A1ng%20t%C3%A1c%20ch%C3%A9o%20%C4%91a%20token'));
}else if ($phongvaotool == '7'){
eval(get('https://run.mocky.io/v3/58aa4d82-564b-4ff0-aa62-629fad127e14'));
}else if ($phongvaotool == '8'){
eval(get('https://run.mocky.io/v3/c570d01e-d7df-4266-bfe0-42bb5989ead0'));
}else if ($phongvaotool == '9'){
eval(get('https://run.mocky.io/v3/11f0fc7e-e755-4e9a-8ce8-ae7b706cbfae'));
}else if ($phongvaotool == '10'){
eval(get('https://run.mocky.io/v3/c2ca9a50-a22c-44a9-b326-661afcd78ad4'));
}else if ($phongvaotool == '11'){
eval(get('https://run.mocky.io/v3/49ef2b29-1054-41f2-a407-69a5a4a3fcdc'));
}else if ($phongvaotool == '12'){
eval(get('https://run.mocky.io/v3/5ffd0bbb-808d-4a5d-8a77-1ebffec52eda'));
}else if ($phongvaotool == '13'){
eval(get('https://run.mocky.io/v3/59314837-718d-4e1e-b602-30c080a41fc5'));
}else if ($phongvaotool == '14'){
eval(get('https://run.mocky.io/v3/55ee6bfd-1199-49c5-b25e-11e2746a5ce2'));
}else if ($phongvaotool == '15'){
eval(get('https://run.mocky.io/v3/a88573de-47ef-4d68-96ba-b0f90b6da199'));
}else if ($phongvaotool == '16'){
eval(get('https://run.mocky.io/v3/659b60d2-42ce-49af-ae25-699ae2036709'));
}else if ($phongvaotool == '16'){
eval(get('https://run.mocky.io/v3/f34a5959-1f63-4701-a73a-58d765b2fc03'));
exit; 
}
function get($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Vui lòng kiểm tra lại kết nối hoặc có thể do lỗi máy chủ!';
    }
    curl_close($ch);
    return $result;
}

?>