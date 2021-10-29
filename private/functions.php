<?php

function url_for($path){
    if($path[0]!= '/'){
        $path = '/' . $path;
    }
 return WWW.$path;
}

function node_path($nd_path)
{
    {
        if ($nd_path[0] != '/') {
            $nd_path = '/' . $nd_path;
        }
        return NODE_PATH.$nd_path;
    }
}
function url_for_admin($admin_path){
    if($admin_path[0]!= '/'){
        $admin_path = '/' . $admin_path;
    }
    return admin_root.$admin_path;
}