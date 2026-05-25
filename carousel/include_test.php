<?php
/*
$imageDir = __DIR__."/kawagoe";

$images = array();
if ($handle = opendir($imageDir)) {
	while (($file = readdir($handle)) !== false) {
		if ($file != "." && $file != "..") {
			$images[] = $file;
		}
	} 
	closedir($handle);
}
*/

$requestUri = $_SERVER["REQUEST_URI"];
$ptn = "/\/classroom\/(.*)\//";
if (preg_match($ptn, $requestUri, $matches)) {
    print_r($matches);
    exit;
}

include __DIR__ . "/kawagoe/setting.php";
$images = $classImages;
//print_r($classImages);exit;
$classImgMin = 10;
?>
<section class="inst-box mb30">
    <h3 class="post-title mb20">PHOTOS</h3>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="/yz/wp-content/themes/yakuzemi/carousel/carousel.css"/>
    <script src='/yz/wp-content/themes/yakuzemi/carousel/carousel.js'></script>
    <div class="classImagesModal">
        <div class="close">× 閉じる</div>
        <div class="classImages">
            <div class="classSlider">
                <?php
                $counter = 0;
                while ($counter < $classImgMin) {
                    foreach ($images as $key => $imageSet) {
                        $image = $imageSet[0];
                        $comment = trim(@$imageSet[1]);
                        echo "<div style='background-image:url(\"/yz/wp-content/themes/yakuzemi/carousel/kawagoe/$image\");' class='imageContainer'>";
                        //echo "<img src='kawagoe/$image' >";
                        if ($comment) {
                            echo "<div class='caption'>$comment</div>";
                        }
                        echo "</div>";
                        $counter++;
                    }
                }
                ?>
            </div>
            <div class="classThumb">
                <?php
                $counter = 0;
                while ($counter < $classImgMin) {
                    foreach ($images as $key => $image) {
                        $image = $image[0];
                        echo "<div style='background-image:url(\"/yz/wp-content/themes/yakuzemi/carousel/kawagoe/$image\");' class='imageContainer'>";
                        echo "</div>";
                        $counter++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="classImageLauncer">
        <div class="classImageLauncerImages">
            <?php
            $counter = 0;
            foreach ($images as $key => $image) {
                $image = $image[0];
                echo "<div style='background-image:url(\"/yz/wp-content/themes/yakuzemi/carousel/kawagoe/$image\");' class='imageContainer' rel='$counter'>";
                echo "</div>";
                $counter++;
            }
            ?>
        </div>
    </div>

    <div class="classImagesSP">
        <div class="classImages">
            <div class="classSliderSP">
                <?php
                $counter = 0;
                while ($counter < $classImgMin) {
                    foreach ($images as $key => $imageSet) {
                        $image = $imageSet[0];
                        $comment = trim(@$imageSet[1]);
                        echo "<div style='background-image:url(\"/yz/wp-content/themes/yakuzemi/carousel/kawagoe/$image\");' class='imageContainer'>";
                        //echo "<img src='kawagoe/$image' >";
                        if ($comment) {
                            echo "<div class='caption'>$comment</div>";
                        }
                        echo "</div>";
                        $counter++;
                    }
                }
                ?>
            </div>
        </div>
    </div>


</section>