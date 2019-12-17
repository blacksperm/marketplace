<?php
 function imagenAjax(){
    if (isset($_FILES["file"]))
    {
     $reporte = null;
     for($x=0; $x<count($_FILES["file"]["name"]); $x++)
     {
        $file = $_FILES["file"];
        $nombre = $file["name"][$x];
        $tipo = $file["type"][$x];
        $ruta_provisional = $file["tmp_name"][$x];
        $size = $file["size"][$x];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];


        if ($tipo != 'image/jpeg' && $tipo != 'image/jpg' && $tipo != 'image/png' && $tipo != 'image/gif')
        {
            $reporte .= "<p style='color: red'>Error $nombre, el archivo no es una imagen.</p>";
        }
        else if($size > 1024*1024)
        {
            $reporte .= "<p style='color: red'>Error $nombre, el tamaño máximo permitido es 1mb</p>";
        }
        else if($width > 500 || $height > 500)
        {
            $reporte .= "<p style='color: red'>Error $nombre, la anchura y la altura máxima permitida es de 500px</p>";
        }
        else if($width < 60 || $height < 60)
        {
            $reporte .= "<p style='color: red'>Error $nombre, la anchura y la altura mínima permitida es de 60px</p>";
        }

    }
    echo $reporte;
}

}