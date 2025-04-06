<?php

namespace App;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;

trait MediasConversions
{
    public function reviewConversion ($files, string $collectionName) {
        switch ($collectionName){
            case "avatars":
                $convertation=$this->addMedia($files)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection($collectionName);
                Image::load($convertation->getPath())->fit(Fit::Crop, 120, 120 )->quality(60)->save();
                break;
            default:
                foreach ($files as $file){   
                $convertation=$this->addMedia($file)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection($collectionName);
                Image::load($convertation->getPath())->fit(fit: Fit::Max, desiredWidth:  2560,  desiredHeight: 1440)->quality(60)->save();
                }
        }
    }
}