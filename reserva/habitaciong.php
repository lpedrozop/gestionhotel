
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>Pagar</title>
    <link rel="stylesheet" type="text/css" href="/hotel/css/shopstyle.css">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
	<div class="mainscreen">
          <div class="card">
            <div class="leftside3">
              
            </div>
            <div class="rightside">
              <form action="reservahg.php" method="POST">
                <h1>Confirmar: Habitacion grande</h1>
                </label>
                <p>Nombre del responsable</p>
                <input type="text" class="inputbox" name="nombre" required />
                <p>N. Documento</p>
                <input type="text" class="inputbox" name="Documento" required />
                <p>Celular</p>
                <input type="text" class="inputbox" name="celular" required />
                <p>Numero de personas
                </p>
                <input type="text" class="inputbox" name="cpersonas" required />
            <div class="expcvv">
    
                <p class="expcvv_text">Llegada</p>
                <input type="date" class="inputbox" name="llegada" id="exp_date" required />
                <p class="expcvv_text">Salida</p>
                <input type="date" class="inputbox" name="salida" id="exp_date" required />
    
            </div>

            <label class="toggler">Servicios de transporte
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
                <p></p>
                <button type="submit" class="button">Pagar</button>
              </form>
            </div>
          </div>
        </div>
        
</body>

</html>