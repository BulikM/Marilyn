<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Employee;
use App\Models\Month;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;

class BEmployeeController extends Controller
{

    protected $queryString = [
        "is_employee",
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $employees = Employee::all();


        return view("backend.employee.index", compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $titles = Title::all();
        $months = Month::all();
        $days = Day::all();
        return view(
            "backend.users.create",
            compact("titles",
                "months",
                "days"
            )
        );
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
