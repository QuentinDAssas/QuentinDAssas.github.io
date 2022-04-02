'use strict';
// ModalMedia display
    // Get the modal
    const modalMedia = document.getElementById("modalMedia");
    // Get the button that opens the modal
    const mediaBtn = document.getElementById("mediaBtn");
    
    // Get the <span> element that closes the modal
    const span = document.getElementsByClassName("closeMedia")[0];
    
    // When the user clicks the button, open the modal 
    mediaBtn.onclick = function() 
    {
      modalMedia.style.display = "block";
    };
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    {
      modalMedia.style.display = "none";
    };
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
      if (event.target == modalMedia) 
      {
        modalMedia.style.display = "none";
      }
    };
    
