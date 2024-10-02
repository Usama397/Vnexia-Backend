<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="dashboard-layout">
    <div class="container-fluid">
        <div class="dashboard-layout">
            <div class="first-side-nav">
                <nav>
                    <ul>
                        <li><a href="#" class="logo">
                                <img src="assets/images/vnexia-white-logo-nav.png" alt="">
                            </a></li>
                        <li><a href="/dashboard" class="navigat-items">
                                <img src="assets/images/dashboard-nav.png" alt="">
                                <span class="nav-item">Dashboard</span>
                            </a></li>
                        <li><a href="/work-site" class="navigat-items">
                                <img src="assets/images/construction-site-nav.png" alt="">
                                <span class="nav-item">Work Sites</span>
                            </a></li>
                        <li><a href="/notification" class="navigat-items">
                                <img src="assets/images/alarm-nav.png" alt="">
                                <span class="nav-item">Notifications</span>
                            </a></li>
                        <li><a href="/safety-guidelines" class="navigat-items">
                                <img src="assets/images/checking-nav.png" alt="">
                                <span class="nav-item">Safety Guidelines</span>
                            </a>
                            <ul id="navigation">
                                <li><a href="/check-points" class="navigat-items">
                                        <img src="assets/images/checkinglist-nav.png" alt="">
                                        <span class="nav-item">Check Points</span>
                                    </a></li>
                            </ul>
                        </li>

                        <li><a href="/users" class="navigat-items">
                                <img src="assets/images/user-nav.png" alt="">
                                <span class="nav-item">Users</span>
                            </a></li>
                        <li><a href="/media" class="navigat-items">
                                <img src="assets/images/media-gallery-nav.png" alt="">
                                <span class="nav-item">Media</span>
                            </a></li>
                        <li><a href="#" class="navigat-items" class="logout">
                                <img src="assets/images/logout-nav.png" alt="">
                                <span class="nav-item">Log out</span>
                            </a></li>
                    </ul>
                </nav>
            </div>
            <div class="body-sec">


                <div class="secon-side-nav">
                    <div class="welcome-start">
                        <h2>WELCOME MARK</h2>
                    </div>
                    <div class="nav-userss">
                        <ul>
                            <li>
                                <select>
                                    <option value="English" selected>English</option>
                                </select>
                            </li>
                            <li>
                                <div class="main_users_card-header">
                                    <div class="user-name">
                                        <h4>Mark Rosco</h4>
                                        <p>Safety Manager</p>
                                    </div>
                                    <div class="user-img">
                                        <img src="assets/images/user-img.png" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('contents')

            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
        integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        $(function () {
            var path = window.location.pathname;
            // Remove 'a' from the selector to directly target .navigat-items
            $('.navigat-items[href="' + path + '"]').addClass('active');
        });

    </script>


    <script>
        var xValues = ["Mon", "Tue", "Wed", "Thu", "Fri"];
        var yValues = [450, 100, 350, 410, 480];
        var barColors = ["#004FFF", "#004FFF", "#004FFF", "#004FFF", "#004FFF"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues,
                    borderWidth: 1, // Optional: set the width of the border
                    borderRadius: 20 // Set border-radius here
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                }
            }
        });

    </script>

<script>
    // Get the current URL path
const currentPath = window.location.pathname;

// Select the parent <ul> element
const navList = document.getElementById('navigation');

// Check if the current path is '/check-points'
if (currentPath === '/check-points') {
    // Add 'active' class to the <ul>
    navList.classList.add('active');
}
</script>    

</body>

</html>
