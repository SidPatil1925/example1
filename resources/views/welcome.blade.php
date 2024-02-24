



   <!-- resources/views/welcome.blade.php -->


@section('content')
    <div>
        <p>Welcome to the application!</p>
        
        @if(session()->has('prompt'))
            <a href="{{ route('rate.limit.prompt') }}" onclick="startNewSession(event)">Start a New Session</a>
        @endif
    </div>

    <script>
        function startNewSession(event) {
            event.preventDefault();
            
            // Use AJAX to notify the server to close the previous session
            // This could involve updating a record in the database or using a token-based approach
            // Example using Axios:
            axios.post('/close-previous-session')
                .then(response => {
                    // Clear the flash session data
                    location.reload();
                })
                .catch(error => {
                    console.error(error);
                    // Handle errors if needed
                });
        }
    </script>
@endsection
