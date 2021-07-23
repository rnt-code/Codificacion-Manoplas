<?php
    include("conexion.php");

    $sql = "SELECT * FROM tipo_prueba";
    $res = mysqli_query($conexion, $sql);
    ?>
    <table>
        <tr>
            <th>Código</th>
            <th>Tipo de prueba</th>
        </tr>
        <?php
		while($vec = mysqli_fetch_array($res)) {
		?>
		<tr>
			<td><?php echo $vec[0];?></td>
			<td><?php echo $vec[1];?></td>
		<?php		
		}
		?>
		</tr>
    </table>
    <?php
?>