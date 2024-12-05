function getXMLHttp() {
  var xmlHttp;
  try {
    xmlHttp=new XMLHttpRequest();
  } catch(e) {
    try {
      xmlHttp=new ActiveXObject('Msxml2.XMLHTTP')
    } catch (e) {
      try {
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        alert("Old browser? Update it to use Ajax!");
        return false
      }
    }
  }
}

function AjaxRequest(value) {
  xmlHttp = getXMLHttp();

  xmlHttp.onreadystatechange =function() {
    if(xmlHttp.readyState == 4) {
      HadnleResponse(xmlHttp.responseText)
    }
  }
}