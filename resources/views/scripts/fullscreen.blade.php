<script>
    const dashboard = document.getElementById("dashboard");

    document.addEventListener('keydown', function(e) {
        if (e.keyCode === {{ $fullscreen_key }}) {
            dashboard.requestFullscreen();
        }
    });

    document.addEventListener("fullscreenchange", function() {
        if (document.fullscreenElement) {
            console.log("Entered full-screen mode");
        } else {
            console.log("Exited full-screen mode");
        }
    });
</script>
