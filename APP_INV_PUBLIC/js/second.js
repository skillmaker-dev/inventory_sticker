function disable_button()
{
    document.getElementById('confirm_button').disabled=true; //disable confirm button
}
function calci()
{
    let depart = document.getElementById('num_inv').value;
    let finish = document.getElementById('qtite').value;
    depart= +depart;
    finish = +finish;
    if(finish >= depart && !isNaN(finish)) //verify if last sticker number is greater than first sticker number
    {
       document.getElementById('quantity').innerHTML = "Quantité: "+ (finish - depart +1); 
       document.getElementById('confirm_button').disabled=false;
    }
    else {
        document.getElementById('confirm_button').disabled=true;
        document.getElementById('quantity').innerHTML = "";
    }
    
    
}