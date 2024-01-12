<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{
    protected $apiUrl = 'https://pokeapi.co/api/v2/pokemon/';

    public function index()
    {
        // Ambil data Pokemon dari API
        $pokemons = $this->getPokemonData();

        // Tampilkan data dalam view
        return view('welcome', compact('pokemons'));
    }
    public function detail($id)
    {
        // Ambil data Pokemon dari API
        $pokemons = $this->getDetail($id);

        // Tampilkan data dalam view
        return view('detail', compact('pokemons'));
    }
    protected function getPokemonData()
    {
        $client = new Client();

        $response = $client->get($this->apiUrl.'?limit=2000');

        return json_decode($response->getBody(), true);
    }
    
    protected function getDetail($id)
    {
        $client = new Client();
        $response = $client->get($this->apiUrl.$id.'?limit=2000');

        return json_decode($response->getBody(), true);
    }
}
