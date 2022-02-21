<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function show()
    {
        return view(
            'game-list',
            [
                'games' => self::getGames(),
            ]
        );
    }

    public function view(int $id)
    {
        return view('game-info', [ 'game' => self::getGameById($id) ]);
    }

    public function getGameById(int $id): Game
    {
        foreach (self::getGames() as $game) {
            if ($game->id === $id) {
                return $game;
            }
        }
        return null;
    }


    public function getGames(){
        return [
            Game::make([
                'id' => 1, 'name' => 'Monopoly','img_url' => 'https://images.unsplash.com/photo-1640461470346-c8b56497850a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80/1000', 'type' => 'multiplayer elimination', 'publication' => '1935',
                'description' => 'Monopoly is a multi-player economics-themed board game. In the game, players roll two dice to move around the game board, buying and trading properties, and developing them with houses and hotels. Players collect rent from their opponents, with the goal being to drive them into bankruptcy.',
                'rating' => '7/10', 'complexity' => 'intermediate', 'cost' => '$30.00'
            ]),
            Game::make([
                'id' => 2, 'name' => 'Sequence', 'img_url' => 'https://i.pinimg.com/originals/15/5f/15/155f15530f5fa96b4a1df07d4cb92d57.jpg','type' => 'multiplayer elimination', 'publication' => '1982',
                'description' => 'Sequence is a hybrid of a board game and a card game. The board consists of two decks of cards laid out in a 10×10 pattern, excluding the eight jacks that play a very important role, which we will discuss later. There are four empty corners that serve as free spaces for the players to use.',
                'rating' => '6/10', 'complexity' => 'intermediate', 'cost' => '$20.00'
            ])
        ];
    }


}
