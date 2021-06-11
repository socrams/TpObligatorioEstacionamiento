<html>
<body>
<form name="redirect" id="redirect">
<center>

<form>
<font face="Arial"><input type="text" size="1" name="redirect2" /></font>
</form>
<font face="Arial">segundos.</font>
</center>
 
<script type="text/javascript">
 
var targetURL="http://localhost/TpObligatorioEstacionamiento/estacionar.php"
var countdownfrom=10
 
 
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
</html>