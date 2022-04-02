'use strict';

function popup() {
    const popin=document.getElementById('popup');
    
      const tables = event.target.dataset.table;
      console.log(tables);
    const deleteId = event.target.dataset.id;

  // ouvre une fenetre sans barre d'etat, ni d'ascenceur
  popin.innerHTML= "<div class=\"container-popin\"><div class=\"popin\"><p>Veuillez confirmer la suppression.</p><form action =\"index.php?controller=Admin\\\Manage&task=delete&table="+tables+"&id="+deleteId+"\"method=\"POST\"><input type=\"submit\" value=\"suppression\"></form><form action =\"index.php?controller=Admin\\\Manage&task=return\"method=\"POST\"><input type=\"submit\" value=\"Retour\"></form></div></div>";
console.log(popin);
}

const deleteBtn = document.querySelectorAll('.delete-btn');


deleteBtn.forEach(function (element)
{
   element.addEventListener("click", function (event)
    {
        popup();
    });
});