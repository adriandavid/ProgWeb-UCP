<html>
<head>
<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","http://weather.yahooapis.com/forecastrss?w=91863141&u=c",true);
xmlhttp.send(null);
}
</script>
</head>
<body>

<h2>XMLHttpRequest</h2>
<button type="button" onclick="loadXMLDoc()">mostrar datos</button>
<div id="myDiv"></div>
 <textarea name="comentarios" rows="10" cols="40">Contenido de la etiqueta</textarea>
</body>
</html>



















































































































