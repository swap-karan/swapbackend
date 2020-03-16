<?php 
$menu_arr = [];
foreach($items as $k => $menu_item){
    $menu_arr[$k]['text']= $menu_item->title;
    $menu_arr[$k]['url']= $menu_item->url; 
    $submenu = $menu_item->children;
    if(isset($submenu)){
        foreach($submenu as $key => $item){
            $menu_arr[$k]['submenu'][$key]['text']= $item->title ;
            $menu_arr[$k]['submenu'][$key]['url']= $item->url ;
            }
        }
    }
   print_r(json_encode($menu_arr));
