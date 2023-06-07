<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
         return view('contacts.index', [
        'contacts' => Contact::get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->name= $request->name;
        $contact->from= $request->from;
        $contact->email= $request->email;
        $contact->phone_number= $request->phone_number;

        $contact->save();

        session()->flash('success','Teman Berhasil Diperbarui.');

        return redirect()->route ('contact.index')->with('success','Teman Diperbarui');
    }
    public function create()
    {
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>['required']
        ]);

        $contact = new Contact();

        $contact->name= $request->name;
        $contact->from= $request->from;
        $contact->email= $request->email;
        $contact->phone_number= $request->phone_number;

        $contact->save();

        return redirect()->route ('contact.index')->with('success','Teman Ditambahkan');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit',[
            'contact'=>$contact,
        ]);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        return redirect()->route ('contact.index')->with('success','Teman Dihapus');
    }
}
