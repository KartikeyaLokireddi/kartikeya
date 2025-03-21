<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Image Gallery</title>
    <style>
        .img-box {
            display: inline-block;
            text-align: center;
            margin: 10px;d
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .img-box img {
            width: 200px;
            height: auto;
            display: block;
            margin-bottom: 5px;
            border-radius: 5px;
        }
        .img-box a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>

<h2>Image Gallery</h2>
<div class="gallery-container">
    <?php
    $images = array("image2.png", "image1.png");
    $directory = "images/";

    if (!is_dir($directory)) {
        echo "<p>Image folder not found!</p>";
    } else {
        
        foreach ($images as $image) {
            echo '<div class="img-box">';
            echo '<img src="' . $directory . $image . '" width="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '">';
            echo '<p><a href="?file=' . urlencode($image) . '">Download</a></p>';
            echo '</div>';
        }
    }

   
    if (isset($_GET["file"])) {
        $file = urldecode($_GET["file"]);
        $filepath = $directory . $file;

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush();
            readfile($filepath);
            exit;
        } else {
            echo "<p>File not found.</p>";
        }
    }
    ?>
</div>

</body>
</html>
