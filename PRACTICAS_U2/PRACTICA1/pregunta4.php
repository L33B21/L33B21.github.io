<?php
    session_start();
    $_SESSION['Pregunta3']=$_POST['preg3'];
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <title></title>
     <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
     <header>
         <?php include 'encabezado.php'; ?>
     </header>
     <section>
       <form method="POST" action="pregunta4.php">
          <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
               <th colspan="2">¿Cuál cree usted que deben ser las medidas
                                que las autoridades deben aplicar para
                                combatir estas incidencias?</th>
                                </tr>
            <tr>
               <td></td>
               <td>
                 <input type="radio" name="preg4"
                        value="Tener a las Chicas Superpoderosas siempre" />
                        Tener a las Chicas Superpoderosas siempore<br/>                         
                 <input type="radio" name="preg4"
                        value="Un alcalde eficiente" />
                        Un alcalde eficiente<br/>                         
                 <input type="radio" name="preg4"
                        value="Conseguir otros superherores" />
                    Conseguir otros superheroes<br/>                         
                 <input type="radio" name="preg4" value="No hacer ni maíz" />No hacer ni míz                     
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" value="< Anterior"
                         onclick = "this.form.action = 'pregunta3.php'" />
                  <input type="submit" value="Siguiente >"
                         onclick = "this.form.action = 'pregunta5.php'" />
               </td>
            </tr>
        </table>
     </form>
   </section>           
   <footer>
       <?php include 'pie.php';?>
   </footer>   
 </body>
</html>