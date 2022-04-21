<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="\..\css\stilus.css" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="\js\Ajax.js"></script>
    <script src="\js\Szakdoga.js"></script>
    <script src="\js\index.js"></script>
</head>

<body>



      
  <main>


        <header><h2>Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h2></header>


                    <div class="szakdolgozatoklistazasa">
                    
                        <div class="fejlec">
                                <div class="szakdogacime">Szakdolgozat címe</div>
                                <div class="tagok">Készítők neve</div>
                                <div class="githublink">GitHub link</div>
                                <div class="oldallink">Szakdolgozat elérhetősége</div>
                              
                             

                            </div>
                        <div class="listaadmin">
                      
                            <div class="szakdogaLista">
                                <div class="nev">Szakdolgozat címe</div>
                                <div class="keszitok">Készítők neve</div>
                                <div class="github">GitHub link</div>
                                <div class="oldal">Szakdolgozat elérhetősége</div>
                              
                                <button class="modositas">&#9998;</button>
                                <button class="torol">&#10060;</button>

                            </div>




                        </div>
                    </div>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                                <button id="modosit">Módosít</button>
                            </div>
                        </form>
                    </div>
            
    </main>
    </body>
    </html>