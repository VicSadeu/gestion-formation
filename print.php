<?php
    require_once('');
var_dump("echo");
            die;
?>
<html>
    <head>
        <title> print</title>
    </head>
    <body>
        <?php
            
            $html2pdf = new \Spipu\Html2Pdf\Html2Pdf( 'P', 'A4', 'fr');
            $html2pdf->writeHTML( '<h1>HelloWorld</h1>Ceci est ma première page' );
            $html2pdf -> sortie ();  
        ?>
        
    </body>
     
</html>
