<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalabaRequest;
use App\Models\Talaba;
use Illuminate\Http\Request;

class TalabaController extends Controller
{
    public function index()
    {
        $models = Talaba::all();
        return view('talaba', ['models' => $models]);
    }
    public function addtalaba()
    {
        return view('addtalaba');
    }
    public function store(StoreTalabaRequest $request)
    {
        //   dd($request->all());
        $requestedData = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('/admin/talabalar'), $requestedData['image']);
        }

        Talaba::create($requestedData);

        return redirect('/talaba');
    }

    public function show(Talaba $talaba)
    {
        // $model = Talaba::findorfail($talaba);
        return view('show', ['model' => $talaba]);
    }

    public function edit(Talaba $talaba)
    {
        return view('test.edit', ['model' => $talaba]);
    }

    public function update(Request $request, Talaba $talaba)
    {
        $requestedData = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $talaba->deleteImage();

            $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('/admin/talabalar'), $requestedData['image']);
        }

        $talaba->update($requestedData);


        return redirect('/talaba');
    }
    public function delete(Talaba $talaba)
    {
        $talaba->deleteImage();

        $talaba->delete();

        return redirect('/talaba')->with('alert', 'You have deleted the student');
    }

    public function search(Request $request)
    {
        $models = Talaba::where('fio', 'LIKE', "%{$request->search}%")
            ->orWhere('tel', 'LIKE', "%{$request->search}%")

            ->orWhere('manzil', 'LIKE', "%{$request->search}%")->get();

        return view('talaba', ['models' => $models]);
    }
    public function add(StoreTalabaRequest $request, Talaba $talaba)
    {
            //   dd($request->all());
            $requestedData = $request->validated();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

                $image->move(public_path('/admin/talabalar'), $requestedData['image']);
            }

            Talaba::create($requestedData);

            return redirect('/talaba');
        }
    }
