<?php
$target_dir = "./skins/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = strtolower($target_file);
$file = basename($_FILES["fileToUpload"]["name"]);
$filname_without_ext = pathinfo($file, PATHINFO_FILENAME);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Bu dosya Bir resim: " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Bu dosya bir resim değil!!";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Dosya adı zaten var.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 200000) {
    echo "Dosya çok büyük .";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "png" ) {
    echo "Sadece PNG dosyaları izin verilir.";
    $uploadOk = 0;


}


if(preg_match('/^[a-zA-Z0-9-]+$/', $filname_without_ext)) {
    // .. upload
} else {
    echo 'Dosya "' . $file . '"Yüklenmedi!! Dosya sadece "A-Z","a-z" ve "0-9" içerebilir.';
     $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Dosya yüklenemedi!!";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Dosya yüklenirken bir hata oluştu.";
    }



}

echo "<a href='http://agarff.tk'>Geri Dön</a>"; 
?>
