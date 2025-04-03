<?php

namespace App;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;

trait MediasConversions
{
    public function reviewConversion ($files, string $collectionName) {
        foreach ($files as $file){   
            $convertation=$this->addMedia($file)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection($collectionName);
            $image=Image::load($convertation->getPath());
            $collectionName==='avatars'? $image->fit(Fit::Crop, 120, 120 ): $image->fit(fit: Fit::Max, desiredWidth:  2560,  desiredHeight: 1440);
            $image->quality(60)->save();
        }
    }
}

//test