document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(document.getElementById('signup-form'));

    fetch('signup.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        if (data === "SignUp successful!") {
            document.getElementById('signup-form').reset();
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
