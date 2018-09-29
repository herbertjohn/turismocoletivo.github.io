<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro de passeios</title>
 </head>
 <body>
  <h2>Cadastro de Passeios</h2>

              <form action="" method="post" enctype="multipart/form-data">
                  
                      <label>Nome do Passeio</label>
                      <input type="text" name="nomedopasseio">
                      <label>Descrição</label>
                      <input type="text" name="descricao">
    	              <input type="file" name="fotodopasseio" multiple><br><br>
                      <input type="submit" value="Cadastrar">
                      <input type="reset" value="Apagar">
	                  

                                       


 
 </body>
 </html>