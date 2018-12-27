<?php

namespace last;

class imageManager
{ 
    public function upload($directory)
    {
        // mkdir($directory, 0777);
        $uploaddir = './blog/avatars' . $directory;
        $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
        if(copy($_FILES['uploadfile']['tmp_name'],$directory.basename($_FILES['uploadfile']['name']))){
            return true;
        }else{
            return false;
        }
    }

    public function delete($imageName)
    {
        unlink($imageName);
    }
}


// ImgaeManager
    // upload($image)
    // delete($path)
    // ...