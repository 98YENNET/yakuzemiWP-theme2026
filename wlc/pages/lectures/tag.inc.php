<?php
$okIps = array("117.102.176.231", "124.33.241.154");
//if(in_array($_SERVER["REMOTE_ADDR"],$okIps)){

$targetSlugs = array(
    "other_students",
    "6years_students",
    "5years_students",
    "4years_students",
    "3years_students",
    "2years_students",
    "1years_students",
);
echo "<ul class='lectureTargetTags'>";
$categories = get_the_category();
foreach ($targetSlugs as $key => $slug) {
    foreach ($categories as $category) {
        if ($slug == $category->slug) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . str_replace("対象", "向け", $category->name) . '</a></li>';
        }
    }
}
echo "</ul>";









//}