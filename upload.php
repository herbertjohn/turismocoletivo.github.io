<?php 
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
copy($nome_temporario,"$nome_real"); 

if(!move_uploaded_file($file, $dest)) { // Executa o
comando do upload no servidor
   echo "Não foi possível
enviar o arquivo!"; /* Caso não foi possível
enviar o arquivo,
   mostra o erro. */
} else {
   echo "Arquivo enviado com sucesso!";
/* Caso o arquivo tenha sido enviado
   com sucesso, mostra a mensagem de
sucesso. */
}
header("Location: testeupload.php");

?>
