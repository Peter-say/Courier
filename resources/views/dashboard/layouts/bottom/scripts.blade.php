 <!-- Jquery JS-->
 <script src="{{$dashboard_assets}}/vendor/jquery-3.2.1.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Bootstrap JS-->
 <script src="{{$dashboard_assets}}/vendor/bootstrap-4.1/popper.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
 <!-- Vendor JS       -->
 <script src="{{$dashboard_assets}}/vendor/slick/slick.min.js">
 </script>
 <script src="{{$dashboard_assets}}/vendor/wow/wow.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/animsition/animsition.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
 </script>
 <script src="{{$dashboard_assets}}/vendor/counter-up/jquery.waypoints.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/counter-up/jquery.counterup.min.js">
 </script>
 <script src="{{$dashboard_assets}}/vendor/circle-progress/circle-progress.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
 <script src="{{$dashboard_assets}}/vendor/chartjs/Chart.bundle.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/select2/select2.min.js">
 </script>
 <script src="{{$dashboard_assets}}/vendor/vector-map/jquery.vmap.js"></script>
 <script src="{{$dashboard_assets}}/vendor/vector-map/jquery.vmap.min.js"></script>
 <script src="{{$dashboard_assets}}/vendor/vector-map/jquery.vmap.sampledata.js"></script>
 <script src="{{$dashboard_assets}}/vendor/vector-map/jquery.vmap.world.js"></script>

 <!-- Main JS-->
 <script src="{{$dashboard_assets}}/js/main.js"></script>

 <script>
    document.addEventListener('DOMContentLoaded', function() {
        var popup = document.getElementById('popup-message');

        if (popup) { // Check if the popup element exists on the page
            setTimeout(function() {
                popup.style.display = 'none';
            }, 6000);

            // Optional: Hide the pop-up when clicking outside of it
            document.addEventListener('click', function(event) {
                if (event.target !== popup && !popup.contains(event.target)) {
                    popup.style.display = 'none';
                }
            });
        }
    });
</script>
