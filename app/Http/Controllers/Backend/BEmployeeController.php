<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeesRequest;
use App\Models\Day;
use App\Models\Employee;
use App\Models\Employee_Adress;
use App\Models\Month;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $employees = User::where('is_employee','=' ,'1')->orderByDesc("id")
            ->withTrashed()
            ->paginate(10);


        return view("backend.employee.index", compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $titles = Title::all();

        return view(
            "backend.employee.create",
            compact("titles"
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeesRequest $request)
    {
        $employee = new User();
        $adres= new Employee_Adress();
        $employee->title_id = $request->title_id;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->birhtdate = $request->birhdate;
        $employee->phone = $request->phone;
        $employee->mobile_phone = $request->mobile_phone;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->is_active = '1';
        $employee->is_employee = '1';
        $employee->birthdate = $request->month;
        $employee->save();
        return redirect()
            ->route("employee.index")
            ->with([
                "alert" => [
                    "message" => "User added",
                    "type" => "success",
                ],
            ]);
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
        $employee = User::findOrFail($id);

        $titles = Title::all();


        return view(
            "backend.employee.edit",
            compact(
                "employee",

                "titles"
            ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        $employee->update($input);
        return redirect('dashboard/employees')->with('status', 'Employee updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
