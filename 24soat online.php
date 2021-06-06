<?php 
 
if (!file_exists('madeline.php')) { 
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php'); 
} 
include 'madeline.php';  
 //UzMaxBoy tomonidan tarqatildi
$MadelineProto = new \danog\MadelineProto\API('session.madeline'); 
$MadelineProto->start(); 
$time=date("H:i",strtotime("5 hour")); 
$kun=date("d-m-Y",strtotime("5 hour")); 
$input = [""]; 
  $rand=array_rand($input); 
  $text="$input[$rand]"; 
 $nik = ["МАТРАНГ "]; 
  $nikrand=array_rand($nik); 
  $niktxt="$nik[$nikrand]"; 
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt $time",'about'=>""]); 
$MadelineProto->account->updateStatus(['offline' => false, ]); 
 
$yil = date("Y", strtotime("5 hour")); 
$sana = date("d/m/Y", strtotime("5 hour")); 
//@UzMaxBoy tomonidan tarqatildi

$logo = ["https://uzmaxboyy.000webhostapp.com/Api/api/index.php?text=$time","https://uzmaxboyy.000webhostapp.com/Api2/api/index.php?text=$time"];
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";
//UzMaxBoy tomonidan tarqatildi
if($yil == ""){
header('Content-type: image/jpg');
file_put_contents("got.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "got.jpg" ]);
?>

@UzMaxBoy tomonidan tarqatildi