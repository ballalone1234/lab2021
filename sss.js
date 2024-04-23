var xmlHttp;
function createXMLHttpRequest() {
  if (window.ActiveXObject) {
    // Internet Explorer
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  } // Firefox, Opera 8.0+, Safari
  else {
    xmlHttp = new XMLHttpRequest();
  }
} //end function createXMLHttpRequest()
function stateChange() {
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    xmlHttp.responseText
    myObj = JSON.parse(this.responseText);
    alert(this.responseText);
    document.getElementById("id").value = myObj.id;
    document.getElementById("name").value =  myObj.name;
    document.getElementById("age").value=  myObj.age;
    document.getElementById("photo").value =  myObj.photo;
    document.getElementById("img").src =  myObj.photo;
  }
} // end function statechange()
function searchName(str) {
  createXMLHttpRequest();
  xmlHttp.onreadystatechange = stateChange;
  var url = "data.php?id=" + str;
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
} //end function showHint(str)


