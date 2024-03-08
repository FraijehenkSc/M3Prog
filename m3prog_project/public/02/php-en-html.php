<?php
$title = "Title" ;
$imgUrl ="https://www.ma-web.nl/media/filer_public_thumbnails/filer_public/ea/29/ea29903f-3fd9-461e-92f0-5af745d6dc19/ma_education_contact_header.png__910x440_q85_box-0,0,1280,401_crop_subsampling-2_upscale.png" ;
$imgName = "Mediacollege Amsterdam" ;
$Author = "FraijehenkSc" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1> <?php echo $title?></h1>
        <img src="<?php echo $imgUrl ?>" alt="<?php echo $imgName ?>">
        <section>
            <p> <?php echo $Author?></p>
        </section>
    </main>
</body>
</html>