var counter = 1;
var limit = 30;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML =" <br><label class='labeladd' for='pid'>Player ID</label><br><input type='text' name='myInputs[]'><br><label class='labeladd' for='pname'>Player Name</label><br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}