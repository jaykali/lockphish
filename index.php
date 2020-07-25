<?php
include 'ip.php';
   

?>

<script>
var OSName="Unknown OS";
if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
if (navigator.appVersion.indexOf("iPhone")!=-1) OSName="iPhone";
if (navigator.appVersion.indexOf("Android")!=-1) OSName="Android";


if (OSName == "Windows") {
 window.location = "index2.html";

}
else if (OSName == "Android") {

 window.location="droid2.html";

}
else if (OSName == "iPhone") {

 window.location="iphone2.html";
}
else {

 document.write("Unsupported device");

}



</script>
