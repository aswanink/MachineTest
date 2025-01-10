<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearby Stores</title>
</head>
<body>
    <div id="stores"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        // Check if latitude and longitude are valid
        if (latitude && longitude) {
            fetch(`/nearby-stores?latitude=${latitude}&longitude=${longitude}`)
                .then(response => response.json())
                .then(data => {
                    // Process the nearby stores data
                    console.log(data);
                })
                .catch(err => {
                    console.error("Error fetching nearby stores:", err);
                });
        } else {
            alert('Unable to retrieve location data.');
        }
    }, function (error) {
        alert('Geolocation is not supported or permission denied.');
    });
} else {
    alert('Geolocation is not supported by your browser.');
}

        });
    </script>
</body>
</html>
