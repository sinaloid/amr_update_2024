<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AdhesionController;
use App\Http\Controllers\CarburantController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\FichierAMRController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ThematiqueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
})->name('index');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('apropos', function () {
    return view('about');
})->name('apropos');


Route::get('visions', function () {
    $datas = [
        "class" => "bi-eye-fill",
        "title" => "Vision",
        /*"content" => "Un monde rural qui connait ses droits, travaille à leur
        effectivité et participe pleinement aux actions de développement"*/
        "content" => "Un monde où les citoyens et les citoyennes sont pleinement
        impliqués dans les actions de développement durable, sont informés de leurs
        droits et devoirs, travaillent à leur effectivité et où personne n'est laissé pour compte."
    ];
    return view('vision', compact('datas'));
})->name('visions');
Route::get('valeurs', function () {
    $datas = [
        "class" => "bi-collection-fill",
        "title" => "Valeurs",
        "content" => ""
    ];
    return view('valeur', compact('datas'));
})->name('valeurs');

Route::get('missions', function () {
    $datas = [
        "class" => "bi-award-fill",
        "title" => "Mission",
        "content" => "Travailler avec et aux cotés des citoyens et des citoyennes dans le respect de la dignité humaine."
    ];
    return view('content', compact('datas'));
})->name('missions');

Route::get('objectifs', function () {
    $datas = [
        "class" => "far fa-check-circle",
        "title" => "objectifs",
        "content" => '
            <p>contribuer à l\'éveil des communautés et l’accroissement de la participation citoyenne des femmes et des jeunes pour un meilleur accès aux services sociaux de base dans une société de justice et de paix.</p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i> Impulser une gouvernance locale participative, inclusive pour la promotion des droits humains, l’enracinement de la décentralisation et la démocratie.</p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i>Autonomiser les femmes et les jeunes pour leur pleine participation aux actions de développement</p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i> Renforcer la souveraineté alimentaire et nutritionnelle des communautés à la base par une agriculture saine, responsable et durable.
            </p>


            <p><i class="bi bi-caret-right-fill text-primary me-3"></i>Bâtir une résilience forte des communautés affectées par les différents chocs et leurs hôtes par la protection des moyens d’existence pour une coexistence pacifique.
            </p>
            '

    ];
    return view('content', compact('datas'));
})->name('objectifs');
Route::get('organisation', function () {
    $datas = [
        "class" => "bi-diagram-3-fill",
        "title" => "Organisation",
        "content" => ""
    ];
    return view('organisation', compact('datas'));
})->name('organisation');

Route::get('lesmembres', function () {
    $datas = [
        "class" => "bi-people-fill",
        "title" => "Membres",
        "content" => ""
    ];
    return view('membre',compact('datas'));
})->name('lesmembres');

Route::get('equipes', function () {
    $datas = [
        "class" => "bi-people-fill",
        "title" => "Equipes",
        "content" => ""
    ];
    return view('equipe',compact('datas'));
})->name('equipes');
Route::get('list-des-actualites', [ActualiteController::class, 'allActualite'])->name('allActualite');
Route::get('detail-actualite/{slug}', [ActualiteController::class, 'detailActualite'])->name('detailActualite');

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    //'reset'    => true,   // for resetting passwords
    //'confirm'  => false,  // for additional password confirmations
    //'verify'   => false,  // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/personnel', function () {
    $datas = [1,2,3,4];
    return view('dashboard.personnel', compact('datas'));
})->name('personnel');

Route::get('/home/partenaires', function () {
    $datas = [1,2,3,4];
    return view('dashboard.partenaire', compact('datas'));
})->name('partenaires');

Route::get('/home/projets', function () {
    $datas = [1,2,3,4];
    return view('dashboard.projet', compact('datas'));
})->name('projets');

Route::get('/home/paiement', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement', compact('datas'));
})->name('paiement');

Route::get('/home/faire-paiement', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement.payin', compact('datas'));
})->name('faire-paiement');


Route::get('/home/rapports', function () {
    $datas = [1,2,3,4];
    return view('dashboard.rapport', compact('datas'));
})->name('rapports');

Route::get('/home/mes-rapports', function () {
    $datas = [1,2,3,4];
    return view('dashboard.rapport', compact('datas'));
})->name('mes-rapports');


Route::get('/home/messages', function () {
    $datas = [1,2,3,4];
    return view('dashboard.message', compact('datas'));
})->name('messages');

Route::get('/home/reunions', function () {
    $datas = [1,2,3,4];
    return view('dashboard.reunion', compact('datas'));
})->name('reunions');

Route::get('/home/taches', function () {
    $datas = [1,2,3,4];
    return view('dashboard.tache', compact('datas'));
})->name('taches');

Route::get('/home/mon-tdb', function () {
    $datas = [1,2,3,4];
    return view('dashboard.accueil', compact('datas'));
})->name('mon-tdb');

Route::get('/home/mes-paiements', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement', compact('datas'));
})->name('mes-paiements');

Route::get('/home/carburants', function () {
    $datas = [1,2,3,4];
    return view('dashboard.carburant', compact('datas'));
})->name('carburants');

Route::get('sendMail', function () {
    $data = [
        'email' => "ounoid@gmail.com",
        "mdp" => "12345678",
        "details" =>"Cordialement",
    ];

    return view('email', compact('data'));
    $to = 'ounoid@gmail.com';
    $subject = 'Test Email';
    //$data = ['message' => 'This is a test email sent using Laravel.'];

    Mail::send('email', compact('data'), function ($message) use ($to, $subject) {
    $message->to($to)->subject($subject);
});

    return "Send success";
});

/**Personnel */
Route::get('/dashboard/membres', [PersonnelController::class, 'membres'])->name('membres');
Route::post('/dashboard/membres', [PersonnelController::class, 'create'])->name('createPersonnel');
Route::get('/dashboard/deletePersonnel/{slug}', [PersonnelController::class, 'deletePersonnel'])->name('deletePersonnel');

Route::get('/dashboard/equipe-operationnelle', [AgentController::class, 'equipe'])->name('equipeOpera');
Route::get('/dashboard/membre', [AgentController::class, 'membre'])->name('membreAgent');

//Route::post('/adhesion', [AdhesionController::class, 'create'])->name('createAdhesion');
Route::get('/dashboard/deleteAdherent/{slug}', [AdhesionController::class, 'deleteAdherent'])->name('deleteAdherent');
Route::get('/dashboard/adhesion', [AdhesionController::class, 'adhesion'])->name('adherents');

Route::resource('/dashboard/carburant', CarburantController::class);
Route::resource('/dashboard/fichier', FichierAMRController::class);
Route::resource('/dashboard/projet', ProjetController::class);
Route::resource('/dashboard/activite', ActiviteController::class);
Route::resource('/dashboard/actualite', ActualiteController::class);
Route::resource('/dashboard/participant', ParticipantController::class);
Route::resource('/dashboard/agents', AgentController::class);
Route::resource('/dashboard/partenaires', PartenaireController::class);
Route::resource('/dashboard/newsletters', NewsletterController::class);
Route::resource('/dashboard/thematiques', ThematiqueController::class);

Route::get('{id}', function () {
    $datas = [
        "class" => "bi-exclamation-triangle",
        "title" => "Temporairement indisponible",
        "content" => ""

        /*"title" => "Page non trouvée",
        "content" => "Nous sommes désolés, la page que vous avez recherchée n'existe pas sur notre site Web !
        Allez peut-être sur notre page d'accueil ou essayez d'utiliser une recherche ?"*/
    ];
    return view('content', compact('datas'));
});
