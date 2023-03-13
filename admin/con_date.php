<?php

function DateThai($strDate)
{
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return  "$strDay $strMonthThai $strYear";
}

function Datetime($strDatetime)
{
    $strYear = date("Y",strtotime($strDatetime))+543;
    $strMonth= date("n",strtotime($strDatetime));
    $strDay= date("j",strtotime($strDatetime));
    $strHour= date("H",strtotime($strDatetime));
    $strMinute= date("i",strtotime($strDatetime));
    $strSeconds= date("s",strtotime($strDatetime));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return  "$strDay $strMonthThai $strYear $strHour:$strMinute";
}

function Dateday($strdayle)
{
    $strYear = date("Y",strtotime($strdayle))+543;
    $strMonth= date("n",strtotime($strdayle));
    $strDay= date("j",strtotime($strdayle));
    $strHour= date("H",strtotime($strdayle));
    $strMinute= date("i",strtotime($strdayle));
    $strSeconds= date("s",strtotime($strdayle));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];
    return  "$strDay";
}

function Datemon($strmon)
{
    $strYear = date("Y",strtotime($strmon))+543;
    $strMonth= date("n",strtotime($strmon));
    $strDay= date("j",strtotime($strmon));
    $strHour= date("H",strtotime($strmon));
    $strMinute= date("i",strtotime($strmon));
    $strSeconds= date("s",strtotime($strmon));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์.","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];
    return  "$strMonthThai";
}
function Dateyear($strYeares)
{
    $strYear = date("Y",strtotime($strYeares))+543;
    $strMonth= date("n",strtotime($strYeares));
    $strDay= date("j",strtotime($strYeares));
    $strHour= date("H",strtotime($strYeares));
    $strMinute= date("i",strtotime($strYeares));
    $strSeconds= date("s",strtotime($strYeares));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];
    return  "$strYear";
}
?>