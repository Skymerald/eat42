<?php 
$html = $_POST['html'];
$css = $_POST['css'];
$php = $_POST['php'];
$js = $_POST['js'];

$prefferedLanguage = "";
for($i = 0; $i < 4; $i++){
    $options[$html, $css, $php, $js];
    $counter;
    if(!empty($options[i])){
        if($counter == 0){
            $prefferedLanguage = $options;
            $counter++;
        }
        else{
            $prefferedLanguage = $prefferedLanguage + ", " + $options;
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
    <?php echo("Votre (ou vos) language préféré : " + $prefferedLanguage); ?>
</body>
</html>