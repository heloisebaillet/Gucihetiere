<?php

namespace Tickets;

include_once __DIR__ . "/Tickets.php";
include_once __DIR__ . "/ITickets.php";

use tickets\Tickets as Tickets;

class TicketTheatre extends Tickets
{
    public $piece;
    public $entracte;

    public function __construct($date, $ageClient, $place, $piece, $horaire)
    {

        parent::__construct($date, $ageClient, $place, $piece, $horaire);

        $this->piece = $piece;
        $this->setId();
        $this->entracte();
    }

    public function entracte()
    {
        if ($this->horaire == "18:00") {
            return "<span class=\"entracte18\">19:30</span>";
        } else if ($this->horaire == "21:00") {
            return "<span class=\"entracte21\">22:30</span>";
        }
    }

    public function displayTicketTheatre()
    {
        echo "<div class=\"votreTicketTheatre\">";

        echo "<h2>Votre Pièce :</h2>";

        echo "<p> <u>Titre :</u> " . $this->piece . "</p>";

        echo "<p> <u>Place :</u> " . $this->place . "</p>";

        echo "<p> <u>Horaire de Début :</u> " . $this->horaire . "</p>";

        echo "<p> <u>Horaire de l'Entracte :</u> " . $this->entracte() . "</p>";

        echo "<p><u>ID :</u> " . $this->idTicket . "</p>";

        echo "</div>";
    }
}

?>