<?php

function get_express($sn='3924730222455'){
    $res = file_get_contents("http://m.kuaidi100.com/autonumber/auto?num=".$sn);

    if( !isset( json_decode($res,true)[0] )  ){
        return false;
    }

    $res = json_decode($res,true)[0];

    $company = file_get_contents("http://m.kuaidi100.com/query?type=".$res['comCode']."&postid=".$sn."&id=1&valicode=");

    $company = json_decode($company,true);
    return $company;
}

var_dump( get_express('3924730222455') );