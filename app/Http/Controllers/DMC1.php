<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DMC1Tricks;

class DMC1 extends Controller
{
    //

    public function index()
    {
        //Dummy Datas for Now
        $Movement =  [
            [
                'id' => 1,
                'title' => 'Horse Jump',
                'description' => 'Getting past through 45 Orb door Quickly'

            
            ],
            [
                'id' => 2,
                'title' => 'Quick Door',
                'description' => 'Interact the door while still moving'

            
            ],
            [
                'id' => 3,
                'title' => 'Ifrit Skip',
                'description' => 'Getting Ifrit Gauntlet Quick without platforming'

            
            ],
            [
                'id' => 4,
                'title' => 'Cosmo Climb',
                'description' => 'Using vortex to fly straight to the exit'

            
            ]
            ];

        
        $Combat = [
            [
                'id' => 1,
                'title' => 'Horse Jump',
                'description' => 'Getting past through 45 Orb door Quickly'

            
            ],
            [
                'id' => 2,
                'title' => 'Quick Door',
                'description' => 'Interact the door while still moving'

            
            ],
            [
                'id' => 3,
                'title' => 'Ifrit Skip',
                'description' => 'Getting Ifrit Gauntlet Quick without platforming'

            
            ],
            [
                'id' => 4,
                'title' => 'Cosmo Climb',
                'description' => 'Using vortex to fly straight to the exit'

            
            ]
            ];
        return view('pages.DMC1.DMC1Index', compact('Movement'), compact('Combat'));
    }
}
