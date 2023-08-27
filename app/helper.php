<?php

if (! function_exists("categories"))
{
    function categories()
    {
        $categories = \App\Models\Category::orderBy('sort', 'asc')->get();

        return $categories;
    }
}

if (! function_exists("siteInfo"))
{
    function siteInfo()
    {
        $info = \App\Models\SiteInfo::where('id', 1)->first();

        return $info;
    }
}
