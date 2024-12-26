<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\MailableContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use stdClass;

class StoreContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $req = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'raisonsociale' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'objet' => 'required|string|max:155',
            'acceptance' => 'boolean',
            'form_message'=> 'required|string'
        ]);
        if($req){
            $sendata = Contact::create($req);
            Mail::to($sendata->email, 'digitweb.run@gmail.com')->send(new MailableContact($sendata));
        }
        return response()->json(['message' => 'Votre message a été envoyé avec succcès. Une copie de votre demande vous a également été envoyé à l\'adresse email que vous avez indiqué.']);
    }
}


// [
//     $nom = 'nom' => $request->nom,
//     $prenom = 'prenom' => $request->prenom,
//     $email = 'email' => $request->email,
//     $raisonsociale = 'raisonsociale' => $request->raisonsociale,
//     $objet = 'objet' => $request->objet,
//     $message = 'message' => $request->message,
//     $acceptance = 'acceptance' => $request->acceptance,
// ]