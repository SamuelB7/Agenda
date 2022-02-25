<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function index() {
        $user = Auth::user();

        $contacts = Contact::where('user_id', $user->id)->get();

        return view('contacts.index', compact('contacts'));
    }

    public function create() {
        return view('contacts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'github_profile' => 'required',
            'user_id' => 'required',
        ]);

        Contact::create($request->toArray());

        return redirect('/contacts')->with('success', 'Contato salvo com sucesso!');
    }

    public function destroy($id) {
        Contact::destroy($id);

        return redirect('/contacts')->with('success', 'Contato deletado com sucesso!');
    }

    public function getRepos($user) {

        $client = new Client();
        $repos = json_decode(
            $client->request(
                'GET',
                "https://api.github.com/users/$user/repos",
                [
                    'headers' => [
                        'Accept' => 'application/json'
                    ]
                ]
            )->getBody()->getContents(), true
        );
    
        //return response()->json($repos[0]['id']);
        return view('contacts.repos', compact('repos'));
    }

    public function show($id) {
        $contact = Contact::find($id);
    }
}
