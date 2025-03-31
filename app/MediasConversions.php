<?php

namespace App;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;

trait MediasConversions
{
    public static function reviewConversion ($files, $model, string $collectionName) {
        foreach ($files as $file){   
            $convertation=$model->addMedia($file)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection($collectionName);
            Image::load($convertation->getPath())->fit(fit: Fit::Max, desiredWidth:  2560,  desiredHeight: 1440)->quality(60)->save();
        }
    }
}

