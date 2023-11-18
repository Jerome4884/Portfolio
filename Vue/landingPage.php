<head>
    <link rel="stylesheet" href="assets/landingPage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="3D">
            <div id="a"></div>
            <div id="b"></div>
            <div id="c"></div>
            <div id="d"></div>
        </div>
    </section>
    <main>
        <!-- <div class="t" style="color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
            <h1>Passe ta souris dessus</h1>
        </div> -->
        <div class="container noselect">
            <div class="canvas">
            <div class="tracker tr-1"></div>
            <div class="tracker tr-2"></div>
            <div class="tracker tr-3"></div>
            <div class="tracker tr-4"></div>
            <div class="tracker tr-5"></div>
            <div class="tracker tr-6"></div>
            <div class="tracker tr-7"></div>
            <div class="tracker tr-8"></div>
            <div class="tracker tr-9"></div>
            <div class="tracker tr-10"></div>
            <div class="tracker tr-11"></div>
            <div class="tracker tr-12"></div>
            <div class="tracker tr-13"></div>
            <div class="tracker tr-14"></div>
            <div class="tracker tr-15"></div>
            <div class="tracker tr-16"></div>
            <div class="tracker tr-17"></div>
            <div class="tracker tr-18"></div>
            <div class="tracker tr-19"></div>
            <div class="tracker tr-20"></div>
            <div class="tracker tr-21"></div>
            <div class="tracker tr-22"></div>
            <div class="tracker tr-23"></div>
            <div class="tracker tr-24"></div>
            <div class="tracker tr-25"></div>
            <div id="card">
                <p id="prompt"></p>
                <div class="title">Bienvenue</div>
                <div>
                    <img id="img" style="width: 756px;" src="./assets/img/laptop forest.png">
                </div>
            </div>
            </div>
        </div>
        <div class="button">
            <button id="btn">
                Click Here
            </button>
        </div>
    </main>
</body>

<script>
    //declaration de variable pour recuperer l'id
    let btn = document.getElementById('btn')
    //Ajout evenement sur bouton
    btn.addEventListener("click", ()=>{
        document.location.href="aPropos.html";//redirection
    })
</script>
