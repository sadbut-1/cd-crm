<?php

namespace App\Http\Controllers;

use App\models\Employer;
use App\models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\EmployerRequest;

class EmployerController extends Controller
{
    private $company;
    private $employer;

    public function __construct(Company $company, Employer $employer)
    {
        $this->company = $company;
        $this->employer = $employer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = $this->employer->with('company')->paginate(10);
        return view('admin.employers.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->company->all();
        return view('admin.employers.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerRequest $request)
    {
        $this->employer->create($request->all());
        return redirect('/admin/employers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        return view('admin.employers.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        $companies = $this->company->all();
        return view('admin.employers.edit', compact('employer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(EmployerRequest $request, Employer $employer)
    {
        $employer->update($request->except(['_token', '_method']));
        return redirect('/admin/employers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return redirect('/admin/employers');
    }
}
