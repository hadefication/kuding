<?php

namespace Hadefication\Kuding\Support\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Mana;

class ContentController extends Controller
{

    public function manage(Request $request)
    {
        $title = 'Manage';

        $menus = [
            ['url' => '#', 'text' => 'Contents', 'active' => true],
        ];

        return view('kuding::pages.cpanel.contents.manage', compact('title', 'menus'));
    }

    public function create(Request $request)
    {
        $title = 'Create';
        $menus = [
            ['url' => '#', 'text' => 'Details', 'active' => true],
            ['url' => '#', 'text' => 'Fields'],
            ['url' => '#', 'text' => 'Settings'],
        ];
        return view('kuding::pages.cpanel.contents.form', compact('title', 'menus'));
    }
}
