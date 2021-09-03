function disable_typing()
{
    if(navigator.userAgent.toLowerCase().indexOf('firefox') <= -1){ //verify if navigator used is firefox,if not true then disable typing 
        // Do Firefox-related activities 
        document.getElementById('typing').disabled=true
    }
    document.getElementById("typing").value="";
    document.getElementById('cat-select').selectedIndex="0";
}
function change_select()
{
    let select_opt = document.getElementById('cat-select');
    if(navigator.userAgent.toLowerCase().indexOf('firefox') <= -1){ //if browser is different than firefox then disable input when clicking on select and vice versa
        // Do Firefox-related activities
    document.getElementById('typing').setAttribute("disabled","disabled");
    document.getElementById("typing").disabled = true;
    document.getElementById('cat-select').disabled = false;
    document.getElementById('cat-select').removeAttribute("disabled");
   }else{
    document.getElementById('typing').removeAttribute("required");
   }
    
    
    document.getElementById("typing").value="";
    let opt = select_opt.value;
    if(opt == 0)  //change image according to selected item
    {
        document.getElementById('category-image').src='images/mob.jpg';
    }
    if(opt == 1)
    {
        document.getElementById('category-image').src='images/inf.jpg';
    }
    if(opt == 2)
    {
        document.getElementById('category-image').src='images/ens.jpg';
    }
    if(opt == 3)
    {
        document.getElementById('category-image').src='images/sc.jpg';
    }
    if(opt == 4)
    {
        document.getElementById('category-image').src='images/sp.jpg';
    }
    if(opt == 5)
    {
        document.getElementById('category-image').src='images/don.jpg';
    }
    if(opt == 6)
    {
        document.getElementById('category-image').src='images/prix.jpg';
    }
}

function typing()
{
    if(navigator.userAgent.toLowerCase().indexOf('firefox') <= -1){
    document.getElementById("typing").disabled = false;
    document.getElementById('typing').removeAttribute("disabled");
    document.getElementById('cat-select').disabled = true;
    document.getElementById('cat-select').setAttribute("disabled","disabled");
    }else{
        document.getElementById('typing').removeAttribute("required");
       }
}


