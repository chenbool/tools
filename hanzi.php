<?php

function is_Chinese($str){
	if (preg_match('/^[\x{4e00}-\x{9fa5}]+$/u', $str)>0) {
	    echo '全是中文';
	} else if(preg_match('/[\x{4e00}-\x{9fa5}]/u', $str)>0) {
	    echo '含有中文';
	} else {
	    echo '没有包含中文';
	}
}

$str = '开放所有函数,超时时间';

is_Chinese($str);