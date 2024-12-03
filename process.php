<?php 
include_once('function.php');
$html = getPost('html');
$css = getPost('css');
$php = getPost('php');
$js = getPost('js');

$prefferedLanguage = "";
for($i = 0; $i < 4; $i++){
    $options = [$html, $css, $php, $js];
    $counter == 0;
    if(!empty($options[$i])){
        if($counter == 0){
            $prefferedLanguage = $options[$i];
            $counter++;
        }
        else{
            $prefferedLanguage = $prefferedLanguage . ', ' . $options[$i];
            $counter++;
        }
    }
    $counter = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo("Votre (ou vos) language préféré : " . $prefferedLanguage); ?>
    <p>canard</p>
</body>
</html>