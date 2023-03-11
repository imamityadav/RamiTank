let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e)=>{
e.preventDefault();
deferredPrompt = e;
btnAdd.style.display = 'block';
});

// Show the prompt
window.addEventListener('click', (e)=>{
  deferredPrompt.prompt();
  deferredPrompt.userChoice.then((choiceResult)=>{
    if(choiceResult.outcome === 'accepted'){
      console.log('User accepted the A2HS Prompt');
    }
    deferredPrompt = null;
  });
});

// Confirming installations
window.addEventListener('appinstalled',(evt)=>{
  app.logEvent('a2hs','installed');
})
