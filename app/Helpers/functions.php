<?php

if (! function_exists('talaba_image_path'))
{
    function talaba_image_path($path) {
        return '/admin/talabalar/' . $path;
    }
}