<?php

require ('./vendor/verot/class.upload.php/src/class.upload.php');

function uploader (){
    $today= date('d/m/Y H:i:s');
    $handle = new upload($_FILES['photo']);
    if ($handle->uploaded){
        
        if ($handle->file_src_name_ext!='bmp' && $handle->file_is_image=='true'){
            $handle->process('./assets/img/uploads/');
           
            if ($handle->processed){
                // echo 'image uploaded';
                file_put_contents('./assets/uploads/PhotoUploads.txt',$today.' upload de '.$handle->file_src_name.' vers '.$handle->file_dst_name."\n",FILE_APPEND);
            }
            else{
                echo 'error'.$handle->error;
            }
        }
        else{
            echo 'type de fichier non supporté';
            file_put_contents('./assets/uploads/PhotoUploads.txt',$today.' upload de '.$handle->file_src_name.':fichier non-supporté '."\n",FILE_APPEND);
        }
    }
}
uploader();
//phpinfo();
?>
