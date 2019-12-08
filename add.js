function add()
{


    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var age = document.getElementById("age").value;

    //Instanciation de l'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    //Ouvrir une connexion avec le serveur
  //  xhr.open("GET","ajouter.php?ref="+ref,true);
    xhr.open("GET","ajoutetudiant.php?cin="+cin+"&nom="+nom+"&prenom="+prenom+"&age="+age,true);
   

    xhr.send(null);
    
    function result(){
        if((xhr.status == 200)&&(xhr.readyState == 4))
            document.getElementById("d").innerHTML = xhr.responseText;
    }
}