<!DOCTYPE html>

<html>

<head>
    <title> NOS FILMS </title>
    <link rel='stylesheet' href='../style.css'>
    <meta charset="utf-8" />
</head>

<body>

    <?php

    include_once __DIR__ . '/../tickets/TicketCinema.php';
    use tickets\TicketCinema as TicketCinema; ?>

    <header>
        <div class="titre">
            <h1 class="titre">NOS FILMS À L'AFFICHE</h1>
        </div>
    </header>

    <div class="buttonsAccueil">

        <a href="./index.php" id="indexId" class="aClassCinema">RETOURNER À L'ACCUEIL</a>

        <a href="./indexTheatre.php" id="theatreId" class="aClassCinema">ALLER À L'ESPACE THÉÂTRE</a>

    </div>

    <div class="selector">

        <div class="container">

            <form action="indexCinema.php" method="POST">

                <input type="date" id="dateId" class="form-item" name="date" placeholder="Date" value="date"
                    min="2023-06-12" max="2023-06-30" />

                <input type="number" id="ageClientId" class="form-item" name="ageClient" placeholder="Votre Âge"
                    value="ageClient" />

                <select id="placeId" class="form-item" name="place">
                    <option value="Front Rows">Front Rows</option>
                    <option value="Middle Rows">Middle Rows</option>
                    <option value="Back Rows">Back Rows</option>
                </select>

                <!-- <select id="tarifId" class="form-item" name="tarif" value="">
                    <option value="tarifEnfant">Tarif Enfant</option>
                    <option value="tarifAdulte">Tarif Adulte</option>
                </select> -->

                <select id="filmId" class="form-item" name="film" value="film">
                    <option value="Pacific Rim">Pacific Rim</option>
                    <option value="Jurassic Park">Jurassic Park</option>
                    <option value="Re-Animator">Re-Animator</option>
                    <option value="The Silence of the Lambs">The Silence of the Lambs</option>
                </select>

                <select id="salleId" class="form-item" name="salle">
                    <option value="Salle 1">Salle 1</option>
                    <option value="Salle 2">Salle 2</option>
                    <option value="Salle 3">Salle 3</option>
                    <option value="Salle 4">Salle 4</option>
                    <option value="Salle 5">Salle 5</option>
                    <option value="Salle 6">Salle 6</option>
                </select>

                <select id="horaireId" class="form-item" name="horaire" value="horaire">
                    <option value="11:00">11:00</option>
                    <option value="16:00">16:00</option>
                    <option value="21:00">21:00</option>
                </select>

                <input id="submitInputId" class="form-item" name="submitInput" type="submit"
                    value="SÉLECTIONNER"></input>

            </form>

        </div>

    </div>

    <div class="filmsInfo">

        <div class="deuxDivs">

            <div class="infoCards">

                <h2 class="title">Pacific Rim</h2>

                <img class="posterSum" src="../public/pr.jpg" />

                <p class="infoFilm">2013, Guillermo Del Toro - Tout Public</p>

                <p class="summary">In 2013, massive alien monsters called Kaiju begin emerging from an interdimensional
                    portal, "the Breach" at the bottom of the Pacific Ocean and attacking coastal cities. In response,
                    humanity builds massive robots called Jaegers, each co-piloted by two or more people who share a
                    mental link by a process called "Drifting" to share the mental stress of piloting the machine.</p>

            </div>

            <div class="infoCards">

                <h2 class="title">Jurassic Park</h2>

                <img class="posterSum" src="../public/jurassic.jpeg" />

                <p class="infoFilm">1993, Steven Spielberg - Tout Public</p>

                <p class="summary">Paleontologists Alan Grant and Ellie Sattler, and mathematician Ian Malcolm are among
                    a select group chosen to tour an island theme park populated by dinosaurs created from prehistoric
                    DNA. While the park's mastermind, billionaire John Hammond, assures everyone
                    that the facility is safe, they find out otherwise when various ferocious predators break free and
                    go on the hunt.</p>

            </div>

        </div>

        <div class="deuxDivs">

            <div class="infoCards">

                <h2 class="title">Re-Animator</h2>

                <img class="posterSum" src="../public/rea.jpg" />

                <p class="infoFilm">1985, Stuart Gordon ⚠️ ne convient pas aux enfants de -12 ans</p>

                <p class="summary">After an odd new medical student arrives on campus, a dedicated local and his
                    girlfriend become involved in bizarre experiments centering around the re-animation of dead tissue.
                </p>

            </div>

            <div class="infoCards">

                <h2 class="title">The Silence of the Lambs</h2>

                <img class="posterSum" src="../public/silence.jpg" />

                <p class="infoFilm">1991, Jonathan Demme ⚠️ ne convient pas aux enfants de -16 ans</p>

                <p class="summary">Clarice Starling, a young F.B.I. cadet, must receive the help of an incarcerated and
                    manipulative cannibal killer, Hannibal Lecter, to help catch another serial killer, Buffalo Bill, a
                    madman who skins his victims.</p>

            </div>

        </div>

    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_POST["ageClient"] > "16" && $_POST["film"] == "The Silence of the Lambs") {

            $generer = new TicketCinema($_POST["date"], $_POST["ageClient"], $_POST["place"], $_POST["film"], $_POST["salle"], $_POST["horaire"]);

            "<div class=\"genererTicketCinema\">";
            $generer->displayTicketCinema();
            "</div>";

        } else if ($_POST["ageClient"] < "16" && $_POST["film"] == "The Silence of the Lambs") {

            echo "<p><b>Achat Impossible</b> : vous êtes trop jeune pour ce film.</p>";

        } else if ($_POST["ageClient"] > "12" && $_POST["film"] == "Re-Animator") {

            $generer = new TicketCinema($_POST["date"], $_POST["ageClient"], $_POST["place"], $_POST["film"], $_POST["salle"], $_POST["horaire"]);

            "<div class=\"displayTicketCinema\">";
            $generer->displayTicketCinema();
            "</div>";

        } else if ($_POST["ageClient"] < "12" && $_POST["film"] == "Re-Animator") {

            echo "<p><b>Achat Impossible</b>  : vous êtes trop jeune pour ce film.</p>";

        } else if ($_POST["film"] == "Pacific Rim" || $_POST["film"] == "Jurassic Park") {

            $generer = new TicketCinema($_POST["date"], $_POST["ageClient"], $_POST["place"], $_POST["film"], $_POST["salle"], $_POST["horaire"]);

            "<div class=\"displayTicketCinema\">";
            $generer->displayTicketCinema();
            "</div>";
        }
    }
    ; ?>

    <footer>
        <p>© A GLOBE COMPANY</p>
    </footer>

</body>

</html>