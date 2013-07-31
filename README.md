# Improved Pagination for Foundation, for WordPress 4.0

As extension of drewsymo's ['Foundation, for WordPress'](https://github.com/drewsymo/Foundation) this is intended to be added to the theme's functions file to take advantage of the frameworks ['pageination'](http://foundation.zurb.com/docs/components/pagination.html) styles.

## Why?

The current pagination included doesn't fully use the styles outlined in the framework. This function adds the necessary syntax and CSS classes so the pagination is displayed like the standard one [here](http://foundation.zurb.com/docs/components/pagination.html).

## How To Use

 - Add the function to your Foundation's functions.php file.
 - Replace line 30 ( ```PHP <?php foundation_pagination(); ?> ```) in the themes index.php file with ```PHP <?php new_centered_pagination(); ?> ```

## Authors

**ZURB**

+ Foundation was made by ZURB, an interaction design and design strategy firm in Campbell, CA.

**Drew Morris**

+ [Blog](http://drewsymo.com/)
+ [Twitter](http://twitter.com/drewsymo/)
+ [Google+](https://plus.google.com/114153589610660530694/)

**Danny Weeks**

+ [Blog](http://blog.dannyweeks.com)
+ [Website](http://dannyweeks.com)