<?php
/**
 * Foundation Pagination Addition
 *
 * @author Danny Weeks <danny@dannyweeks.com> <https://github.com/DannyWeeks/>
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0 (https://github.com/drewsymo/Foundation)
 * @uses:
 *    Add the below function to your Foundation's functions.php file.
 *    Replace line 30 ( <?php foundation_pagination(); ?> ) in the themes index.php file with <?php new_centered_pagination(); ?>
 * @todo create function for left aligned pagination
 **/

function new_centered_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo '<div class="pagination-centered"><ul class="pagination">';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='current'><a href=''>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
         echo "</ul></div>";
     }
}
