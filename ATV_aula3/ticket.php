<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Ticket</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h2 align=center> Ticket Vendor</h2>
    <p align=center> <a href="index.html">Voltar</a></p>

    <table border=1 width=80% align=center><tr>
        <td><label for="valor">Valor pago:</label></td>     
        <td><span>Bilhete</span></td>
        <td><label for="quantidade">Quantidade:</label></td>
        <td><label for="troco">Troco:</label></td>
    </tr>

    <tr>
	
	<?php

		$valor = $_POST['valor'];
		$bilhete = $_POST['bilhete'];
        $troco = $valor;
		$quantidade = 0;
        
        if($bilhete == 1){
            $bilhetes = 'Unitário';
            $x = 1.30;
        } else if($bilhete == 2) {
            $bilhetes = 'Duplo';
            $x = 2.40;
        } else {
            $bilhetes = '10 Viagens';
            $x = 10;
        }

        if($valor < $x){
            $quantidade = 'Valor Insuficiente';
            $troco = 0;
        } else {
            do{
                $quantidade++;
                $troco = ($troco - $x);
            }while($troco > $x);
            
        }
        

        echo '<td>'.$valor.'</td>
			  <td>'.$bilhetes.'</td>
			  <td>'.$quantidade.'</td>        
			  <td>'.$troco.'</td>
			  <td></td>';
	
	?>
    </tr></table>
    <p align=center> <a href="index.html">Voltar</a></p>
</body>
</html>
