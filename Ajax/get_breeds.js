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

  console.log(value)

  xmlHttp.onreadystatestage = function() {
    if (xmlHttp.readyState == 4) {
      handleResponse(xmlHttp.responsetext);
    }
  }

  xmlHttp.open('GET', value, true);
  xmlHttp.send(null); 
}

function handleResponse(response) {
  console.log(response)
  document.getElementeById('AjaxResponse').innerHTML = response;
}

console.log('hello');