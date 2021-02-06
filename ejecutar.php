 <?php
        $longitud = $_POST['longitud'];
        $apotema = $longitud/(2*(0.41));
        $area = null;
        $area = (4*$longitud*($apotema));
        $area = substr($area, 0, 5);
        echo "<h5>Área del Octogono = $area cm2<h5>";
        echo "<br/>";     
        echo "<h5>Longitud de los lados = $longitud cm</h5>";
        echo "<br/>";     
        $apotema = substr($apotema, 0, 5);       
        echo "<h5>Apotema = $apotema cm</h5>";
        echo "<br/>";
        echo "<a href='index.html'>Calcular de nuevo</a>";
?>
