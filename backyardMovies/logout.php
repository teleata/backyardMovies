<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        iframe {
            width: 100vw;
            height: 100vh;
        }

        .thank-you {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 60px;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- Display a moving "Thank You" message -->
    <div class="thank-you" id="thank-you">
        <script>
            // JavaScript to animate the "Thank You" message
            let thankYou = document.getElementById('thank-you');
            let animation = thankYou.animate([
                { left: '0%' },
                { left: '100%' }
            ], {
                duration: 7000, 
                iterations: Infinity
            });
        </script>
        Thank You for using Jamrack Cinema!
    </div>

    <!-- Embed the YouTube video with autoplay -->
    <iframe src="https://www.youtube.com/embed/yO28Z5_Eyls?autoplay=1" title="The Greatest Showman | &quot;Rewrite The Stars&quot; Lyric Video | Fox Family Entertainment" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>
</html>
