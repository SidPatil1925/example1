<!-- resources/views/prompt.blade.php -->

<div>
    <p>Another session is in progress. Do you want to continue the previous session?</p>
    <button id="continueButton">Continue Session</button>
</div>

<script>
    document.getElementById('continueButton').addEventListener('click', function () {
        // Send a request to the server to close the previous session
        // You may use AJAX or fetch API for this

        fetch('/api/close-previous-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                // Add any other headers if needed
            },
            body: JSON.stringify({}),
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response as needed
            // For example, reload the page or enable the API calls again
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
