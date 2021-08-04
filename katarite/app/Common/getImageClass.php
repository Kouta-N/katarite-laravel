<?php

namespace app\Common;

class getImageClass
{
    public static function getImage($request,$item)
    {
        $image = $request->file('img_path');
        if ($request->hasFile('img_path') && $image->isValid()) {
            $image = $image->getClientOriginalName();
            $path = $request->file('img_path')->storeAs('public/images', $image);
            $item->img_path = str_replace( 'public' , 'storage' , $path );
        }
    }
}