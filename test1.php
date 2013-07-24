<?php

Define("YJ_SysError",false);

//错误输出方式
IF(YJ_SysError){
	Error_reporting(E_ALL);
}Else{
	Function MyError($code, $msg, $file, $line,$context){
		$IntTime=(time()+8*3600);$Now=Gmdate("Y-m-d H:i:s",$IntTime);
		$Err=$code.'['.$Now."] Fatal error: $msg in $file on line $line".Chr(10);
		if($code==0){
		Error_log($Err,3,$_SERVER['DOCUMENT_ROOT']."/home/yiming/error/error.log");
		}else{
		Error_log($Err,3,$_SERVER['DOCUMENT_ROOT']."/home/yiming/error/error.log");die();
		}
	}Set_error_handler('MyError');
}

echo "aaa";
trigger_error("Value must be 1 or below");
die("error message about test1 \n");

//callUndefFunc();
?>