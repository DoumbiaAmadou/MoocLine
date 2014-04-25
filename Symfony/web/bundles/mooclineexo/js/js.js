function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifPseudo(champ)
{
   if(champ.value.length < 4 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPass(pass)
{

   var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
   
   if(!re.test(pass.value))
   {
      surligne(pass,  true);
      return false;
   }
   else
   {
      surligne(pass,  false);
      return true;
   }
}

function verifForm(f)
{
   var pseudoOk = verifPseudo (f.pseudo);
   var prenomOk = verifPseudo (f.prenom);
   var nomOk    = verifPseudo (f.nom);
   var mailOk   = verifMail   (f.email);
   var passOk   = verifPass   (f.password); 
   var cpassOk  = verifPass   (f.password_confirmation);

   if(pseudoOk && prenomOk && nomOk && mailOk && passOk && cpassOk){
      
   	if((f.password.value == f.password_confirmation.value))
    	return true;
    else {
    	surligne(f.password,  false);
    	surligne(f.password_confirmation,  false);
    	return false;
    }
   }else
   {
      //alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}