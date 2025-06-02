// Pour éviter que le navgateur bloque le pop up il faut créer un addEventListen sur notre boutton

// Premiére étape : il faut récupérer le  premier bouton

const button2 = document.getElementById('bouton2');

//Maintenant on met un autre EventListener sur notre bouton deux pour la fermture de la deuxiéme fenêtre

button2.addEventListener('click', () => {
  window.close();
})
