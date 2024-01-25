<?php
use App\Models\Blog;

if (! function_exists('blog_image_path'))
{
   function blog_image_path($path)
   {
    return  Blog::IMAGE_PATH . $path;
   }
}

?>
