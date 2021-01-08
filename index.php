<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-dischi</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="app">
            <div class="btn">
                <button @click="update('Bon Jovi')">Bon Jovi</button>
                <button @click="update('Queen')">Queen</button>
                <button @click="update('Sting')">Sting</button>
                <button @click="update('Steve Gadd Band')">Steve Gadd Band</button>
                <button @click="update('Iron Maiden')">Iron Maiden</button>
                <button @click="update('Eric Clapton')">Eric Clapton</button>
                <button @click="update('all')">All</button>
            </div>
            <div class="container">
                <div class='box' v-for="album in albums">
                    <img :src="album['poster']">
                    <h3>{{album['title']}}</h3>
                    <h4>{{album['author']}}</h4>
                    <p>{{album['year']}}</p>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>
