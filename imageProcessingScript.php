<?php
/**
 * Created by PhpStorm.
 * User: rosent76
 * Date: 7/12/15
 * Time: 11:22 AM
 */

/**
 * PHP GD
 * create a simple image with GD library
 *
 */
require('fpdf.php');

function addGrid($file, $numXBoxes, $numYBoxes, $thickness =5)
{
   header("Content-Type: image/jpeg");
    $im = imagecreatefromjpeg($file)
        or die("Cannot Initialize new GD image stream");
//add line
    $fileSize = getimagesize($file);
    $width = $fileSize[0];
    $height = $fileSize[1];
    $xIncrement = ($width-($numXBoxes - 1)*5)/$numXBoxes;
    $yIncrement = ($height-($numYBoxes - 1)*5)/$numYBoxes;
    $y1 = 0;
    $y2 = $height;
    imagesetthickness($im, $thickness   );
    for ($i = $xIncrement; $i <= $width; $i += $xIncrement+5) {
        $x1 = $i;
        $x2 = $i;
        $color = imagecolorallocate($im, 51, 0, 0);
        imageline($im, $x1, $y1, $x2, $y2, $color);
    }
    $x1 = 0;
    $x2 = $width;
    for ($i = $yIncrement ; $i <= $height; $i += $yIncrement+5) {
        $y1 = $i;
        $y2 = $i;
        $color = imagecolorallocate($im, 51, 0, 0);
        imageline($im, $x1, $y1, $x2, $y2, $color);
    }
//outputs the image as png

    $b = imagejpeg($im, "/img1",100);
//frees any memory associated with the image
    imagedestroy($im);
}

function overlayOnPdf($num_x_pages = 1, $num_y_pages = 1) {
    $pdf = new FPDF('P','inch', array(8.5*$num_x_pages, 11*$num_y_pages));
    $pdf->AddPage();
    $pdf->Image('/img1',10,10);
    $pdf->Output();

}

//check that there is a file uploaded with no error
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb

    $filename = basename($_FILES['uploaded_file']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
    if (($ext == "jpeg") && ($_FILES["uploaded_file"]["type"] == "image/jpeg") &&
        ($_FILES["uploaded_file"]["size"] < 2000000)) {
        addGrid($_FILES["uploaded_file"]["tmp_name"], $_POST['x'], $_POST['y'], $_POST['thickness']);
        overlayOnPdf();
    } else {
       // echo "Error: Only .jpg images under 350Kb are accepted for upload";
    }
} else {
    //echo "Error: No file uploaded";
}

//setting the image header in order to proper display the image

?>