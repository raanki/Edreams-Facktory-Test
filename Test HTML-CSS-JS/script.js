                                     /***  MODAL ***/
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('modal');
  const showModalButton = document.getElementById('showModal');
  const closeModalButton = document.getElementById('closeModal');

  showModalButton.addEventListener('click', () => {
    modal.style.display = 'flex';
  });

  closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Fermer la pop-up lorsqu'on clique en dehors de la zone de contenu
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
});


                                    /*** MENU HAMBURGER ***/

document.addEventListener('DOMContentLoaded', () => {
  const menuIcon = document.getElementById('iconMenu');
  const navMenu = document.querySelector('nav');

  menuIcon.addEventListener('click', (event) => {
    event.stopPropagation(); // cela empêche l'événement de remonter au document
    if (navMenu.className !== 'open') {
      navMenu.className = 'open';
    } else {
      navMenu.className = 'closed';
    }
  });

  window.addEventListener('resize', () => {
    // si la largeur de la fenêtre est supérieure à 600px, fermer le menu, et le remettre par defaut
    if (window.innerWidth > 600) {
      navMenu.className = 'defautMenu';
    }
  });

  // Ajoutez un événement d'écoute sur le document pour fermer le menu quand on clique en dehors
  document.addEventListener('click', (event) => {
    if (navMenu.className == 'open') {
      navMenu.className = 'closed';
    }
  });

  // Stoppe la propagation de l'événement de clic sur le menu pour éviter qu'il ne ferme le menu
  navMenu.addEventListener('click', (event) => {
    event.stopPropagation();
  });
});


