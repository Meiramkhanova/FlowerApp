<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContacttController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view ('contacts.index')->with('contacts', $contacts);
    }


    public function create()
    {
        return view('contacts.create');
    }


    public function store(Request $request)
    {
        //$input = $request->all();
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            //'image' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            //dd($request->all());
            $url = $request->file('image')->store('image');
//            $destinationPath = 'public/img/images';
//            $catImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//            $image->move($destinationPath, $catImage);
            $input['image'] = $url;
        }
        dd();
        //Product::create($input);
        //Contact::create($input);
        Contact::create([
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'image' => $input['image']
        ]);
        //return redirect('contact')->with('flash_message', 'Contact Addedd!');
        return redirect()->route('contact')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        //$input = $request->all();
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required'

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        //$product->update($input);
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');
    }
}
