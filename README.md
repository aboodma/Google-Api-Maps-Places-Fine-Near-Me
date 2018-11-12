# Google-Api-Maps-Places-Find-Near-Me<br>
![alt text](http://nearme.griffindesign.net/24232707_146109612706923_6722228968910461930_n.png)<br>
Google Api Maps Places Fine Near Me is Project Made For Help To locate The places in maps you added to DataBase 
You Can Try Demo Version From Here : http://nearme.griffindesign.net <br>
![alt text](http://nearme.griffindesign.net/Demo.png)
# How To Change Api Key 
1 . You Should Change The Api Key {<br>
You Can Generate Your Key From Here : https://console.developers.google.com/apis/dashboard<br>
1- Create Project <br>
2- Add Apis & Services<br>
}<br>
2 . Now Open index.php go to Row {71} and put your key in the script src After Key Parametrer<br>
<script defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=YOUR_KEY_HERE&callback=createSearchableMap"></script><br>
3 . Open createSearchableMap.js go to Row {78} and put Your Key At the value Of Var Key<br>
  var key = "YOUR_KEY_HERE";<br>
# File Stracture
 *Root<br>
 /assets<br>
  -css<br>
    /---<br>
        -bootstrap.min.css<br>
        -reset.css<br>
        -style.css<br>
  -js<br>
    /---<br>
        -bootstrap.bundle.min.js<br>
        -bootstrap.min.js<br>
        -form.js        <br>
        -jquery.min.js<br>
  -images<br>
    /---<br>
        -logo.png<br>
        -logog.png<br>
<br>
 -createSearchableMap.js  //include All  Maps Functions and Search functions<br>
 -GetLocations.php        // include php & Mysqli query to get loctions from database<br>
 -import.php              // function to import -CSV- file To Database <br>
 -index.php<br>
 -project.zip<br>


