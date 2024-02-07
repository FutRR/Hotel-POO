<?php

class Client
{
    private string $nom;
    private string $prenom;
    private array $reservations;


    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations = [];
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservations(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

    public function calculerSejour()
    {
        $total = 0;
        foreach ($this->reservations as $reservation) {
            $date1 = $reservation->getDateDebut();
            $date2 = $reservation->getDateFin();
            $interval = $date1->diff($date2);

            $total += $interval->d * $reservation->getChambre()->getPrix();
        }
        return $total;
    }


    public function afficherReservations()
    {
        $result = "<h3>Réservations de $this</h3>
                    <span class='green'>" . count($this->reservations) . " Réservations</span>";
        if (empty($this->reservations)) {
            $result .= "<p>Aucune réservations !</p>";
        } else {
            foreach ($this->reservations as $reservation) {
                $result .= "<p><span class='bold'>Hotel : " . $reservation->getChambre()->getHotel() . "</span> / " . $reservation->getChambre()->afficherNumero() . " (" . $reservation->getChambre()->getInfos() . ") " . $reservation->afficherDates() . "</p>";
            }
        }
        $result .= "Total : " . $this->calculerSejour() . " €";
        return $result;
    }

}