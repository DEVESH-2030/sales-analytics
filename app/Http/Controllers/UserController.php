<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Client\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = '.dashboard.pages.';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);

        return view($this->view . 'customer-acquisition', compact('users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function customerAcquisition()
    {
        $users = User::selectRaw('DATE_FORMAT(created_at, "%b") as month, count(id) as total_user')
                ->groupBy('month')
                ->orderByRaw(config('variable.sort_months'))
                ->get();

        return view($this->view . 'customer-acquisition', compact('users'));
    }


        /**
     * Display a listing of the resource.
     */
    public function userProfile()
    {
        $user = auth()->user();
        return view($this->view . 'user-profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        //
    }
}
