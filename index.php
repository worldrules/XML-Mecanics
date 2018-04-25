<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Carvalho
 * Date: 23/04/2018
 * Time: 14:47
 */

?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html>
<html>
<head>


    <title>CRUD</title>
</head>
<body>

<div class="alert alert-sucess">

    <form action="xmlcreate.php" method="post">

        <input type="" name="nome" value="" placeholder="Insira o Nome" ><br/>

        <input type="text" name="estado" value="" placeholder="Estado"><br/>

        <input type="text" name="valor" value="" placeholder="Valor"><br/>

        <input type="text" name="email" value="" placeholder="Email"><br/>
<br/>
        <td><button class="btn btn-primary" name="submit" type="submit" >Submit</button></td>
        <td><input class="btn btn-primary" name="cancel"  type="submit"  value="Cancel" /></td>


        <a href="consulta.php" class="btn btn-primary">Consultar</a>



    </form>


</div>

</html>









