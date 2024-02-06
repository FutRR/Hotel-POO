<?php

class Reservation
{
    private Hotel $hotel;
    private Chambre $chambre;
    private Client $client;

    public function __construct(Hotel $hotel, Chambre $chambre, Client $client)
    {
        $this->hotel = $hotel;
        $this->hotel->addReservations($this);
        $this->chambre = $chambre;
        $this->chambre->addReservations($this);
        $this->client = $client;
        $this->client->addReservations($this);
    }

    public function getHotel(): Hotel
    {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel)
    {
        $this->hotel = $hotel;

        return $this;
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
}