<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    
    <title>:( error :( </title>
    
    <link rel="shorcut icon" href="chocado.jpg">
    <!--link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/cover/"-->


    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Te Lo Estaciono</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="https://teloestaciono.herokuapp.com/estacionar.php">Ingresar</a>
        <a class="nav-link" href="index.php">Salir</a>
        <!--a class="nav-link" href="#"></a-->
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <img class="mb-4" src="chocado.jpg" alt="" width="240" height="129">
    <h1 class="cover-heading">Error</h1>
    <p class="lead">Error al ingresar la patente o al retirar el auto, reingrese dominio</p>
    <p class="lead">
      <a href="\TpObligatorioEstacionamiento\estacionar.php" class="btn btn-lg btn-secondary">Volver</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">


<!--cuenta atras -->
    <body>
<form name="redirect" id="redirect">
<center>

<form>
<font face="Arial"><input type="text" size="1" name="redirect2" /></font>
</form>
<font face="Arial">segundos.</font>
</center>
 
<script type="text/javascript">
 
var targetURL="https://teloestaciono.herokuapp.com/estacionar.php"
var countdownfrom=5
 
 
var currentsecond=document.redirect.redirect2.value=countdownfrom+1
function countredirect(){
    if (currentsecond!=1){
        currentsecond-=1
        document.redirect.redirect2.value=currentsecond
    }else{
        window.location=targetURL
        return
    }
    setTimeout("countredirect()",1000)
}
 
countredirect()
 
</script>
</form>
</body>


<!-- aqui-->
    <div class="inner">
      <p><a href="#">Te Lo estaciono</a>, by <a href="index.php">@Socrams</a>.</p>
    </div>
  </footer>
</div>


    
  </body>
</html>
