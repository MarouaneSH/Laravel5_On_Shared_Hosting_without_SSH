<?php

function Asset_url($file){
    return env("APP_URL")."/assets/".$file;
}
function Asset_path($file){
    return "assets/".$file;
}