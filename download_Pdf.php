<?php
if(!empty($_GET['file']))
{
    echo "not empty";
    $file_name = $file_name = $_GET['file'].".pdf";
    $file_path = 'Notes/'.$file_name;
    if(!empty($file_name) && file_exists($file_path))
    {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment;filename=$file_name");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding: binary");
        readfile($file_path);
        exit;

    }
    else{
        echo "This File does not exists";
    }
}

// header("content-disposition:attachment;filename=".urlencode($file_name));
//  $fb = fopen($file,"r");
//  while(!feof($fb))
//  {
//      echo fread($fb,9999);
//      flush(void);
//  }
//  fclose($fb);
?>