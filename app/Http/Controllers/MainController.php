<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;    
use App\Models\User;

class MainController extends Controller
{
    public function index() {
        // $new = new PreExpedition;
        // $new->region_id = $region;
        // $new->ship_id = $ship;
        // $new->title = $title;
        // $new->days= $days;
        // $new->save();
        // return $new;
        
        // $new = new User();

        // $new->email = 'first@last2';
        // $new->password = 'aa18aa012';
        // $new->save();
        // if(Auth::attempt(['email' => $email, 'password' => $password]))
            // error.log('nice');
        // Auth::login($new, true);
        return Inertia::render('main', [
//             'canLogin' => Route::has('login'),
//             'canRegister' => Route::has('register'),
//             'laravelVersion' => Application::VERSION,
//             'phpVersion' => PHP_VERSION,
//             'nice1'=>'very nice',
//             'users' => User::,
            
//         ]);
//     }
// }

            'filters' => Request::all('search', 'role', 'trashed'),
            'users' => Auth::user()//->account->users()
                ->orderBy('first_name')
                // ->filter(Request::only('search', 'role', 'trashed'))
                ->get()
                ->transform(function ($user) {
                    return [
                        'canLogin' => Route::has('login'),
                        'canRegister' => Route::has('register'),
                        'laravelVersion' => Application::VERSION,
                        'phpVersion' => PHP_VERSION,
                        'nice1'=>'very nice'
                        // 'id' => $user->id,
                        // 'name' => $user->name,
                        // 'email' => $user->email,
                        // 'owner' => $user->owner,
                        // 'photo' => $user->photoUrl(['w' => 40, 'h' => 40, 'fit' => 'crop']),
                        // 'deleted_at' => $user->deleted_at,
                    ];
                }),
        ]);
    }
}
