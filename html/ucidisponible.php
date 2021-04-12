<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos.css">
    <title>LOGIN</title>
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
</head>
<body>
    <section class="admin">
        <a href="admin.html">
            <input class="buttons2" type="button" value="Admin" href="#">
        </a>
        <a href="index.html">
            <input class="buttons2" type="button" value="HOME" href="#">
        </a>
    </section>
    <section class="formato">
        <div class="">

        </div>
        <form action="">
            <h5>BUSCAR CAMA UCI DISPONIBLE</h5> 
            <form action="">
                    <h3>por departamento:</h3>
                    <select class="tama" id="lista1" name="lista1">
                        <option class="tama" value="">Departamento</option>
                        <option value="1">Amazonas</option>
                        <option value="2">Ancash</option>
                        <option value="3">Apurimac</option>
                        <option value="4">Arequipa</option>
                        <option value="5">Ayacucho</option>
                        <option value="6">Cajamarca</option>
                        <option value="7">Callao</option>
                        <option value="8">Cusco</option>
                        <option value="9">Huancavelica</option>
                        <option value="10">Huanuco</option>
                        <option value="11">Ica</option>
                        <option value="12">Junin</option>
                        <option value="13">La Libertad</option>
                        <option value="14">Lambayeque</option>
                        <option value="15">Lima</option>
                        <option value="16">Loreto</option>
                        <option value="17">Madre de Dios</option>
                        <option value="18">Moquegua</option>
                        <option value="19">Pasco</option>
                        <option value="20">Piura</option>
                        <option value="21">Puno</option>
                        <option value="22">San Martin</option>
                        <option value="23">Tacna</option>
                        <option value="24">Tumbes</option>
                        <option value="25">Ucayali</option>
                    </select>
                    <input class="buttons" type="submit" value="BUSCAR">
                
                <div id="select2lista"></div>
                <input class="buttons" type="submit" value="BUSCAR">

                
            </form>

        </form>
    </section>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"id_dept=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>