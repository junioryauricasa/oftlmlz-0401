<script type="text/javascript">
function generar(longitud)
{
  long=parseInt(longitud);
  var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789@/-&%$#()=/?¡¿°!Ø${├";
  var contraseña = "";
  for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
  document.getElementById("pass").innerHTML=contraseña;
}
</script>
<p id="pass"></p>
<form id="Form" name="aleatorio" method="post" action="JavaScript:generar(document.aleatorio.long.value)" >
<input name="long" type="number" id="texto" autocomplete="off" placeholder="Longitud de la contraseña" required="">
<button type="submit" >Generar</button>
</form>