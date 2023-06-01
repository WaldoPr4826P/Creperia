<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title> Crepas Santa Apolonia </title>
</head>

<body>
    <header>
        <h1> Crepas Santa Apolonia</h1>
        <h3> Desde 1964 </h3>
    </header>

    <form method="post" class="form">
        <section class="description">
            <h3>Descripcion</h3>
            <label for="tipo">Tipo</label>
            <select name="tipo">
                <option value="1">Salado</option>
                <option value="2">Dulce</option>
            </select>
            <label for="sabor">Sabor</label>
            <select name="sabor">
                <option>Nutella</option>
                <option>Jamon</option>
                <option>Queso Philadelfia</option>
                <option>Galleta de Oreo</option>
                <option>Manchego con Champiñones</option>
                <option>Manchejo con Jamon</option>
                <option>Hawaiana</option>
            </select>
            <label for="cantidad">Cantidad</label>
            <select name="cant">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </section>

        <section class="ingredientesdul">
            <h3>Ingredientes dulces</h3>
            <label><input type="checkbox" value="fresa" name="ingd[]" class="tam"><img src="imagenes/fresa.png"></label>
            <label><input type="checkbox" value="durazno" name="ingd[]" class="tam"><img
                    src="imagenes/durazno.webp"></label>
            <label><input type="checkbox" value="platano" name="ingd[]" class="tam"><img
                    src="imagenes/platano.png"></label>
            <label><input type="checkbox" value="Philadelfia" name="ingd[]" class="tam"><img
                    src="imagenes/logochesse.png"></label>
            <label><input type="checkbox" value="frutosSECOS" name="ingd[]" class="tam"><img
                    src="imagenes/frutos.png"></label>
            <label><input type="checkbox" value="chocolate" name="ingd[]" class="tam"><img
                    src="imagenes/chocolate.png"></label>
        </section>
        <section class="descption">
            <input class="btn" type="submit" name="enviar" value="calcular">
        </section>
    </form>

    <?php
    $sabor = $_POST['sabor'];
        require "crepas.php";
        if(isset($_POST['enviar'])){
            if(!empty($_POST['ingd']))
            {
                $ingextra = count($_POST['ingd']);
                echo "<h3>Has seleccionado los siguientes ".$ingextra." ingredientes: </h3>";
                foreach($_POST['ingd'] as $seleccion) {
                    echo "<p>".$seleccion ."</p>";
                }
                
            } 
            else{
                $ingextra=0;
            }
        }  
            $obj=new Crepas($_POST['cant'],$ingextra);


                echo  "<h3> El total a pagar por crepa tipo ". $_POST['tipo'].", cantidad de ". $_POST['cant']. " con ". $ingextra. " ingredientes extras y sabor de ". $sabor. " es de $". $obj->cobrar($_POST['tipo']). "</h3>"; 	
            
        ?>
</body>



</html>