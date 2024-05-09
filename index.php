<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <header>
        <?php require_once "./header.php"; ?>
        </header>
        <main class="bg-blue">
            <div class="container">
                <div class="display-flex-row col-12">
                    <div class="song-card" v-for="song in songs">

                        <img :src="song.poster" alt="...">
                        <div class="text-center">
                            <h4 class="text-light pt-2">{{ song.title}}</h4>
                            <p class="text-light">{{ song.author}}</p>
                            <p class="text-light">{{ song.year}}</p>
                        </div>

                    </div>
                </div>
            </div>


        </main>
        <footer>

        </footer>
    </div>


    <script src="./js/app.js"></script>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>