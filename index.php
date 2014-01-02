<?php
/**
 * This file contains few simple usecases which allow to test how script works.
 */


define('DS', DIRECTORY_SEPARATOR);

// Simple helper
class ResizeHelper {
    public static function getUrl($path, $width, $height) {
        return "/resizer/{$width}x{$height}/{$path}";
    }
}
?>

<style>
    img {
        border : 1px solid black;
        margin : 20px;
    }
</style>

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 100, 100); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 100, 200); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 200, 200); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 600, 350); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 300, 300); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/small.jpg', 400, 400); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 100, 100); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 100, 200); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 200, 200); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 600, 350); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 300, 300); ?>" />
<br />

<img src="<?php echo ResizeHelper::getUrl('/images/big.jpg', 400, 400); ?>" />
<br />

