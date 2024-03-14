function popupfunction(x)
{
    document.getElementById('popup'+x).style.display='block';
    document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
    document.getElementById('popup'+x).style.display='none';
    document.getElementById('fade'+x).style.display='none';
}

function showmycart()
{
    document.getElementById('mycart').style.display = 'block'
}

function getCart(x)
{
    document.getElementById('mycart').innerHTML += x;
    
}
