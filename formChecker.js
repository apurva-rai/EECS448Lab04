function check()
{

  if((document.getElementById('item1').value < 0) ||
    (document.getElementById('item2').value < 0) ||
    (document.getElementById('item3').value < 0) ||
    (document.getElementById('name').value.length == 0) ||
    (document.getElementById('password').value.length == 0))
  {

    alert("Please fill out the parameters correctly!");
    return false;

  }

  return true;

}
