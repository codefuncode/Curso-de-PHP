$imagick = new Imagick($filePath);

$size = $imagick->getImageGeometry();
$width     = $size['width'];
$height    = $size['height'];
unset($size);

$textBottomPosition = $height-1;
$textRightPosition = $width;

$black = new ImagickPixel('#000000');
$gray  = new ImagickPixel('#C0C0C0');

$textRight  = 0;
$textLeft   = 0;
$textBottom = 0;
$textTop    = $height;

$foundGray = false;

for($x= 0; $x < $width; ++$x) {
    for($y = 0; $y < $height; ++$y) {
        $pixel = $imagick->getImagePixelColor($x, $y);
        $color = $pixel->getColor();
        // remove alpha component
        $pixel->setColor('rgb(' . $color['r'] . ','
                         . $color['g'] . ','
                         . $color['b'] . ')');

        // find the first gray pixel and ignore pixels below the gray
        if( $pixel->isSimilar($gray, .25) ) {
            $foundGray = true;
            break;
        }

        // find the text boundaries
        if( $foundGray && $pixel->isSimilar($black, .25) ) {
            if( $textLeft === 0 ) {
                $textLeft = $x;
            } else {
                $textRight = $x;
            }

            if( $y < $textTop ) {
                $textTop = $y;
            }

            if( $y > $textBottom ) {
                $textBottom = $y;
            }
        }
    }
}

$textWidth = $textRight - $textLeft;
$textHeight = $textBottom - $textTop;
$imagick->cropImage($textWidth+10, $textHeight+10, $textLeft-5, $textTop-5);
$imagick->scaleImage($textWidth*10, $textHeight*10, true);

$textFilePath = tempnam('/temp', 'text-ocr-') . '.png';
$imagick->writeImage($textFilePath);

$text = str_replace(' ', '', shell_exec('gocr ' . escapeshellarg($textFilePath)));
unlink($textFilePath);
var_dump($text);