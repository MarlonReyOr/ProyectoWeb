<!DOCTYPE html>
<html lang="es">
<head>
    <?php
function imprimirSemestre($semestre){

}
$inicioTabla="<table>
<thead>
    <tr>
        <th colspan='4'>Semestre $numeroDeSemestre</th>
    </tr>
    <tr>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Semestre</th>
        <th>Calificacion</th>
    </tr>
</thead>
</table>"
    /*ejemplo1
        $materia1=["S1-AV","Analisis vectorial","2022/2023-1",8];
        $materia2=["S1-CA","Calculo","2022/2023-1",6];
        $promedioSem1=($materia1[3]+$materia2[3])/2;


    $contenidoTabla="<table>
    <thead>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Semestre</th>
        <th>Calificacion</th>
    
    </thead>
    <tr></tr>
        <td>S1-AV</td>
        <td>Analisis vectorial</td>
        <td>2023/2023-1</td>
        <td>8</td>
    </tr>
    </table>"*/ 
    ?>  
</head>
<body>
<?php
echo "<h2>Materias de ESCOM</h2>";

/* ejemplo1
$inicioTabla="<table>";
echo $inicioTabla;
$contenidoTabla="<table>
<thead>
    <th>Clave</th>
    <th>Nombre</th>
    <th>Semestre</th>
    <th>Calificacion</th>

</thead>
<tr></tr>
    <td>S1-AV</td>
    <td>Analisis vectorial</td>
    <td>2023/2023-1</td>
    <td>8</td>
</tr>
</table>"
echo $contenidoTabla;
*/
    function imprimirMaterias($numero){
        $materia[0][0]="S1-AV";
        $materia[0][1]="Analisis vectorial";
        $materia[0][2]="2022/2023-1";
        $materia[0][3]=10; 
    }

    imprimirSemestre(1);

?>

</body>

</html>
