<?php

namespace App\Traits;

// use Intervention\Image\Image;

use Intervention\Image\Facades\Image;

trait MediaUploadTrait
{
    public function uploadMedia($file, $path = null, $old_image = null)
    {
        if ($path != null) {
            if (! file_exists(storage_path('/app/public/'.$path))) {
                mkdir(storage_path('/app/public/'.$path), 0777, true);
            }
            if (! file_exists(storage_path('/app/public/'.$path.'/thumbnail'))) {
                mkdir(storage_path('/app/public/'.$path.'/thumbnail'), 0777, true);
            }
        }

        // Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();

        // Get file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Remove unwanted characters
        $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
        $filename = preg_replace("/\s+/", '-', $filename);
        $filename = strtolower($filename);

        // Get the original image extension
        $extension = $file->getClientOriginalExtension();

        // Create unique file name
        $fileNameToStore = $filename.'_'.date('ymdhis').'.'.$extension;

        /*Create thumbnail image code start*/
        $this->resizeImage($file, $path, $fileNameToStore);
        /*Create thumbnail image code end*/

        $destinationPath = storage_path() . '/app/public/' . $path;
        $file->move($destinationPath, $fileNameToStore);

        // Remove old image from folder
        $this->unlinkMedia($path, $old_image);
        
        return $fileNameToStore;
    }

    public function unlinkMedia($path, $old_image = null)
    {
        if($old_image != null) {
            @unlink(storage_path().'/app/public/'. $path . '/thumbnail/' .$old_image);
            @unlink(storage_path().'/app/public/'. $path . '/' .$old_image);

            return true;
        }

        return false;
    }

    public function resizeImage($file, $path, $fileNameToStore)
    {
        $width = 150;
        $height = 100;

        // $width = Image::make($file)->height();
        // $height = Image::make($file)->width();

        if($path != null && $path == 'goals') {
            $width = 48;
            $height = 48;
        }

        if($path != null && $path == 'events') {
            $width = 128;
            $height = 128;
        }

        if($path != null && $path == 'settings') {
            $width = 150;
            $height = 119;
        }

        // upload path
        $destinationPathThumbnail = storage_path() . '/app/public/' . $path . '/thumbnail';

        // create instance
        $img = Image::make($file->path());

        // resize image to fixed size
        $img->resize($width, $height)->save($destinationPathThumbnail.'/'.$fileNameToStore);

        return true;
    }
}
