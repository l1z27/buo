<?php
//-------------------------------------------------
//Dynamic Season For Header Banner
  $dateNow = date('m');
  if($dateNow == 12 || $dateNow == 1 || $dateNow == 2){
    $seassonOrders = 'Winter';
  }elseif($dateNow == 3 || $dateNow == 4 || $dateNow == 5){
    $seassonOrders = 'Spring';
  }elseif($dateNow == 6 || $dateNow == 7 || $dateNow == 8){
    $seassonOrders = 'Summer';
  }else{
    $seassonOrders = 'Fall';
  }
//-----------end dynamic season 






?>