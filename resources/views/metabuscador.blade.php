<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal"
                    method="POST"

                    action="{{url("buscar")}}">
                    //proteccion a hakeo
                    @csrf
        <fieldset>

        <!-- Form Name -->
        <center>
            <legend>Buscador en diferentes motores de busqueda</legend>
        </center>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">1.Ingrese el termino a buscar </label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>



        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2.Seleccione motor de busqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
            /****************************************************************************/
            <div class="radio">
              <label for="motores-0">
                    <input type="radio" name="motores" id="motores-0" value="3" checked="checked">

                          Yahoo
              </label>
            </div>
            /****************************************************************************/
            <div class="radio">
              <label for="motores-0">
                <input type="radio" name="motores" id="motores-0" value="4" checked="checked">
                          Baidu
              </label>
            </div>
            /*****************************************************************************/
            <div class="radio">
              <label for="motores-0">
                <input type="radio" name="motores" id="motores-0" value="5" checked="checked">
                          Daum
              </label>
            </div>
            /*****************************************************************************/
          
             <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="6">
                        Yandex
              </label>
            </div>
            //*****************************************************************************
            <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="7">
                        Ask
              </label>
            </div>
            //*****************************************************************************
            <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="8">
                      Ecosia
              </label>
            </div>
            /******************************************************************************/
            <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="9">
                      Aol
              </label>
            </div>
            /******************************************************************************/
             <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="10">
                      Goo
              </label>
            </div>
            /******************************************************************************/
            <div class="radio">
              <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="2">
                    Bing
              </label>
            </div>
            /******************************************************************************/
          </div>
        </div>
        <center>
            <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button  type=  id="singlebutton" name="singlebutton" class="btn btn-warning">Buscar</button>
            </div>
        </center>

          </div>

        </fieldset>
        </form>

</body>
</html>
