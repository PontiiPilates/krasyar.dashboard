{{-- Add Bootstrap with Popper --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

{{-- Page Reloader --}}
<script>
    setTimeout(function() {
        location.reload();
    }, 600000);
</script>

{{-- FullscreenAPI --}}
<script>
    const dashboard = document.getElementById("dashboard");
    // const fullscreenButton = document.getElementById("fullscreenButton");

    // toggle fullscreen
    // fullscreenButton.addEventListener("click", function() {
    //     alert('Done');
    //     dashboard.requestFullscreen();
    // });



    document.addEventListener('keydown', function(e) {
        if (e.keyCode === 13) {
            dashboard.requestFullscreen();
        }
    });

    // listens for fullscreen toggle
    document.addEventListener("fullscreenchange", function() {
        if (document.fullscreenElement) {
            console.log("Entered full-screen mode");
        } else {
            console.log("Exited full-screen mode");
        }
    });
</script>
