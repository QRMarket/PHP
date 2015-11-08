<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/* 
 * This function will prepare main and subcategories menu. 
 */

function prepareCategoryMenu(){
    
    require 'categories.php';
    include 'config.php';
    
    echo '<ul class="theme_menu cats">';
    
    foreach ($array as $cat => $values) {
        //Display main categories
        echo "<li class=has_megamenu> <a href=#>$cat</a>";
        echo "<div class='mega_menu type_2 clearfix'>";
        echo "<div class='mega_menu_item'>";
        echo "<h6><b>By Category</b></h6>";
        echo "<ul class='list_of_links'>";

        //Display sub categories
        foreach ($values as $subcats) {
            
            //Fixing ampersand(&) issue while getting subcat value from http
            $subcatsWithAmpersand = str_replace("&","%26",$subcats);
            
            //Front path
            $root_path=ROOT_PATH;
            
            echo "<li><a href='".$root_path."templates/ctaegory.php?id=$subcatsWithAmpersand'>$subcats</a></li>";
        }

        echo "</ul>";
        echo "</div>";

        //Related Category Image
        echo "<div class=mega_menu_item>";
        echo "<a href=#><img src=" . ROOT_PATH . "images/mega_menu_img_1.jpg ></a>";
        echo "</div>";


        echo "</div>";
        echo " </li>";
    }

    echo '</ul>';
}

function prepareCategoryTabMenu($tabIndex){
    
    require 'categories.php';
    
    echo "<ul class='tabs_nav clearfix'>";
    
     foreach ($array as $cat => $values) {
         
       $tabIndex++;
       echo "<li><a href='#tab-$tabIndex'>$cat</a></li>";
     }
     echo "</ul>";
    
   
}
?>                