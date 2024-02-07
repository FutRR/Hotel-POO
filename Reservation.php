<?php

class Reservation
{
    private Chambre $chambre;
    private Client $client;
    private DateTime $dateDebut;
    private DateTime $dateFin;



    public function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin)
    {
        $this->chambre = $chambre;
        $this->chambre->addReservations($this);
        $this->chambre->getHotel()->addReservations($this);
        $this->chambre->setEtat(true);
        $this->client = $client;
        $this->client->addReservations($this);
        $this->dateDebut = new DateTime($dateDebut);
        $this->dateFin = new DateTime($dateFin);

    }

    public function getChambre(): Chambre
    {
        return $this->chambre;
    }

    public function setChambre(chambre $chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }
    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(DateTime $dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }


    public function afficherDates()
    {
        $date = "du " . $this->dateDebut->format("d-m-Y") . " au " . $this->dateFin->format("d-m-Y") . "";
        return $date;
    }
}