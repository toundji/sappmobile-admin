<?php

use App\Http\Controllers\API\AgentEntrepriseController;
use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\EntrepriseController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\UserTypeController;
use App\Http\Controllers\API\TransportController;
use App\Http\Controllers\API\ConducteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\OthersController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [BaseController::class, 'register']);
Route::post('/login', [BaseController::class, 'login']);

Route::post('uploading-file-api', [UserController::class, 'upload']);
Route::post('verify-phone-number', [UserController::class, 'verifyPhoneNumber']);

//user type
Route::get('/user_type', [UserTypeController::class, 'getAll']);
Route::get('/user_type/{id}', [UserTypeController::class, 'getOne']);
Route::post('/user_type', [UserTypeController::class, 'create']);
Route::delete('/user_type/{id}', [UserTypeController::class, 'delete']);
Route::put('/user_type/{id}', [UserTypeController::class, 'update']);

//categories
Route::get('/categories', [OthersController::class, 'getAllCategories']);
Route::get('/categories/{id}', [OthersController::class, 'getOneCategories']);

//users
Route::get('/users-no-login', [UserController::class, 'getAll']);
Route::get('/user-no-login/{id}', [UserController::class, 'getOneNoLogin']);

//conducteurs
Route::get('/conducteurs-no-login', [ConducteurController::class, 'getAll']);
Route::get('/conducteurs-no-login/{id}', [ConducteurController::class, 'getOneNoLogin']);

//publications
Route::get('/publications', [OthersController::class, 'getAllPublications']);
Route::get('/publications/{id}', [OthersController::class, 'getOnePublication']);

//annonces
Route::get('/annonces', [OthersController::class, 'getAllAnnonces']);
Route::get('/annonces/{id}', [OthersController::class, 'getOneAnnonce']);

//faqs
Route::get('/faqs', [OthersController::class, 'getAllFaqs']);
Route::get('/faqs/{id}', [OthersController::class, 'getOneFaq']);
Route::post('/faqs', [OthersController::class, 'createFaq']);

//Agent Entreprises
Route::get('/agent-entreprises-no-login', [AgentEntrepriseController::class, 'getAll']);
Route::get('/agent-entreprises-no-login/{id}', [AgentEntrepriseController::class, 'getOneNoLogin']);

//Informations
Route::get('/informations', [OthersController::class, 'getInformations']);
Route::post('/informations', [OthersController::class, 'createInformation']);







Route::middleware('auth:api')->group(function(){

    Route::post('/categories', [OthersController::class, 'createCategories']);
    Route::delete('/categories/{id}', [OthersController::class, 'deleteCategories']);
    Route::put('/categories/{id}', [OthersController::class, 'updateCategories']);


    //users
    Route::get('/users', [UserController::class, 'getAll']);
    Route::get('/user', [UserController::class, 'getOne']);
    Route::delete('/users', [UserController::class, 'delete']);
    Route::put('/users', [UserController::class, 'update']);
    Route::post('/users/image_profil', [UserController::class, 'update_image_profil']);


    //client
    Route::get('/clients', [ClientController::class, 'getAll']);
    Route::get('/clients/{id}', [ClientController::class, 'getOne']);
    Route::post('/clients', [ClientController::class, 'create']);
    Route::delete('/clients/{id}', [ClientController::class, 'delete']);
    Route::put('/clients/{id}', [ClientController::class, 'update']);

    //Conducteur
    Route::get('/conducteurs', [ConducteurController::class, 'getAll']);
    Route::get('/conducteur', [ConducteurController::class, 'getOne']);
    Route::post('/conducteurs', [ConducteurController::class, 'create']);
    Route::delete('/conducteurs/{id}', [ConducteurController::class, 'delete']);
    Route::put('/conducteurs', [ConducteurController::class, 'update']);

    //agent entreprise
    Route::get('/agent-entreprises', [AgentEntrepriseController::class, 'getAll']);
    Route::get('/agent-entreprise', [AgentEntrepriseController::class, 'getOne']);
    Route::post('/agent-entreprises', [AgentEntrepriseController::class, 'create']);
    Route::delete('/agent-entreprises/{id}', [AgentEntrepriseController::class, 'delete']);
    Route::put('/agent-entreprises/{id}', [AgentEntrepriseController::class, 'update']);

    //Entreprise
    Route::get('/entreprises', [AgentEntrepriseController::class, 'getAllCompany']);
    Route::get('/entreprises/{id}', [AgentEntrepriseController::class, 'getOneCompany']);
    Route::get('/entreprises-by-agent/{id_agent}', [AgentEntrepriseController::class, 'getAllCompanyByAgent']);
    Route::get('/entreprises-by-agent-one/{id}', [AgentEntrepriseController::class, 'getOneCompanyByAgent']);
    Route::post('/entreprises-by-agent', [AgentEntrepriseController::class, 'createCompany']);
    Route::put('/entreprises-by-agent/{id}', [AgentEntrepriseController::class, 'updateCompany']);
    Route::delete('/entreprises-by-agent/{id}', [AgentEntrepriseController::class, 'deleteCompany']);

    //Vehicules and driver
    Route::get('/vehicules', [ConducteurController::class, 'getAllVehicules']);
    Route::get('/vehicules/{id}', [ConducteurController::class, 'getOneVehicules']);
    Route::get('/vehicules-by-driver/{conducteur_id}', [ConducteurController::class, 'getAllVehiculesByDriver']);
    Route::get('/vehicules-by-driver-one/{id}', [ConducteurController::class, 'getOneVehiculesByDriver']);
    Route::post('/vehicules-by-driver', [ConducteurController::class, 'createVehicules']);
    Route::put('/vehicules-by-driver/{id}', [ConducteurController::class, 'updateVehicules']);
    Route::delete('/vehicules-by-driver/{id}', [ConducteurController::class, 'deleteVehicules']);

    //vehicules and company
    Route::get('/vehicules-by-company/{id_entreprise}', [EntrepriseController::class, 'getAllVehiculesByCompany']);
    Route::get('/vehicules-by-company-one/{id}', [EntrepriseController::class, 'getOneVehiculesByCompany']);
    Route::post('/vehicules-by-company', [ConducteurController::class, 'createVehicules']);
    Route::put('/vehicules-by-company/{id}', [ConducteurController::class, 'updateVehicules']);
    Route::delete('/vehicules-by-company/{id}', [ConducteurController::class, 'deleteVehicules']);

    //Commandes by user
    Route::get('/commandes-by-user/{user_id}', [TransportController::class, 'getAllByUser']);
    Route::get('/commandes-by-user-one/{id}', [TransportController::class, 'getOne']);
    Route::post('/commandes-by-user', [TransportController::class, 'create']);
    Route::put('/commandes-by-user/{id}', [TransportController::class, 'update']);
    Route::delete('/commandes-by-user/{id}', [TransportController::class, 'delete']);

    //Commande by driver
    Route::get('/commandes-by-driver/{conducteur_id}', [TransportController::class, 'getAllByDriver']);

    //Commandes by vehicule
    Route::get('/commandes-by-vehicule/{vehicule_id}', [TransportController::class, 'getAllByVehicule']);


    //Complices
    Route::get('/get-all-complice-by-user', [UserController::class, 'getAllCompliceByUser']);

    Route::get('/get-all-complice-by-parent', [UserController::class, 'getAllCompliceByParent']);
    Route::post('/create-complice-by-parent', [UserController::class, 'createComplice']);
    Route::delete('/delete-complice-by-parent/{id}', [UserController::class, 'deleteComplice']);

    //Porte feuille
    Route::get('/get-solde-porte-feuille', [UserController::class, 'getSoldePorteFeuille']);

    Route::post('/crediter-porte-feuille',[UserController::class, 'crediterPorteFeuille']);
    Route::post('/debiter-porte-feuille/{user_id}', [UserController::class, 'dechargerPortefeuille']);

    //Localisations
    Route::post('/localisations', [TransportController::class, 'createLocalisation']);
    Route::put('/localisations/{id}', [TransportController::class, 'updateLocalisation']);

    //reseach users
    Route::post('/search-users', [UserController::class, 'reseachInUsers']);

});
Route::get('/vehi/{id}', [ConducteurController::class, 'get']);


