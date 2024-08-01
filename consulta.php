<?php
include "conecta.php";
$sql = "SELECT id, nome, senha, email FROM usuario";
$resultado = mysqli_query ($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado)>0){ 
    while($registro=mysqli_fetch_assoc($resultado)) { 
        echo"Id: ". $registro["id"]."-Nome:" .$registro["nome"]. 
        " ".$registro["senha"]."- Email: ". $registro["email"].
        "<br>";
    }
}else{ 
    echo "Nehum registro encontrado";
}
echo "<br>Nomes que começa com 'c'<br>";
$sql = "SELECT id, nome, senha, email FROM usuario where nome like 'c%';";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if(mysqli_num_rows($resultado) > 0){
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email: " . $registro["email"].
        "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>