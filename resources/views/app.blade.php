<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Pulse Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'xs': '475px',
                    },
                }
            }
        }

    </script>
</head>
<body class="bg-fixed bg-center bg-cover bg-no-repeat"
      style="background-image: url('img/pulse.png');">
  @yield('content')
</body>
</html>