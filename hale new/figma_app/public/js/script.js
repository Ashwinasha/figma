document.getElementById('newsletter-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way
  
    var form = event.target;
    var formData = new FormData(form);
    var responseMessage = document.getElementById('response-message');
  
    fetch(form.action, {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      // Display success message
      responseMessage.innerText = "Thank you for subscribing!";
      responseMessage.className = "success";
      responseMessage.style.display = "block"; // Show the message
      form.reset(); // Optional: Clear the form fields
    })
    .catch(error => {
      // Display error message
      responseMessage.innerText = "There was an error. Please try again.";
      responseMessage.className = "error";
      responseMessage.style.display = "block"; // Show the message
    });
  });
  
