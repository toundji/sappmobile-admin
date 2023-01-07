<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\Site\MainController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [MainController::class, "index"])->name("index");

Route::prefix('finance')->middleware(["middleware" => "authadmin"])->group(function () {

    Route::get('generals/{type}', [FinanceController::class, "generals"])->middleware("autorisationAuth:finance_generals")->name("admin.finance_generals");

    Route::get('clients/{type}', [FinanceController::class, "clients"])->middleware("autorisationAuth:finance_clients")->name("admin.finance_clients");

    Route::get('conducteurs/{type}', [FinanceController::class, "conducteurs"])->middleware("autorisationAuth:finance_conducteurs")->name("admin.finance_conducteurs");

    Route::get('vehicules/{type}', [FinanceController::class, "vehicules"])->middleware("autorisationAuth:finance_vehicules")->name("admin.finance_vehicules");

    Route::get('entreprises/{type}', [FinanceController::class, "entreprises"])->middleware("autorisationAuth:finance_entreprises")->name("admin.finance_entreprises");


    Route::get('client/{id}', [FinanceController::class, "client"])->middleware("autorisationAuth:finance_client")->name("admin.finance_client");

    Route::get('conducteur/{id}', [FinanceController::class, "conducteur"])->middleware("autorisationAuth:finance_conducteur")->name("admin.finance_conducteur");

    Route::get('vehicule/{id}', [FinanceController::class, "vehicule"])->middleware("autorisationAuth:finance_vehicule")->name("admin.finance_vehicule");

    Route::get('entreprise/{id}', [FinanceController::class, "entreprise"])->middleware("autorisationAuth:finance_entreprise")->name("admin.finance_entreprise");

});



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route("login");
    });

    Route::get('cant-access', [AdminController::class, "cantaccess"])->name("cant-access");

    Route::get('', [AdminController::class, "login"])->name("login-admin");

    Route::get('admin', [AdminController::class, "admin"])->name("admin");

    Route::post('informations', [AdminController::class, "p_informations"])->name("admin.p_informations");

    Route::group(["middleware" => "authadmin"], function() {

        Route::get('clients', [ClientController::class, "clients"])->middleware("autorisationAuth:clients")->name("admin.clients");

        Route::get('client/{id}', [ClientController::class, "client"])->middleware("autorisationAuth:clients")->name("admin.client");



        Route::get('conducteurs/{type?}', [ConducteurController::class, "conducteurs"])->middleware("autorisationAuth:conducteurs")->name("admin.conducteurs");

        Route::get('conducteur/{id}', [ConducteurController::class, "conducteur"])->middleware("autorisationAuth:conducteurs")->name("admin.conducteur");



        Route::get('vehicules', [VehiculeController::class, "vehicules"])->middleware("autorisationAuth:vehicules")->name("admin.vehicules");

        Route::get('add-vehicule', [VehiculeController::class, "add_vehicule"])->middleware("autorisationAuth:vehicule_add")->name("admin.add-vehicule");

        Route::get('edit-vehicule/{id}', [VehiculeController::class, "edit_vehicule"])->middleware("autorisationAuth:vehicule_edit")->name("admin.edit-vehicule");

        Route::get('vehicule/{id}', [VehiculeController::class, "vehicule"])->middleware("autorisationAuth:vehicules")->name("admin.vehicule");



        Route::get('classes', [VehiculeController::class, "price"])->middleware("autorisationAuth:classes")->name("admin.classes");

        Route::get('add-classe', [VehiculeController::class, "add_classe"])->middleware("autorisationAuth:classe_add")->name("admin.add_classe");

        Route::get('classe/{id}', [VehiculeController::class, "edit_classe"])->middleware("autorisationAuth:classe_edit")->name("admin.edit_classe");


        Route::get('add-manager', [ManagerController::class, "add_manager"])->middleware("autorisationAuth:manager_add")->name("admin.add_manager");

        Route::get('managers', [ManagerController::class, "managers"])->middleware("autorisationAuth:managers")->name("admin.managers");

        Route::get('manager/{id}', [ManagerController::class, "manager"])->middleware("autorisationAuth:managers")->name("admin.manager");



        Route::get('entreprises', [EntrepriseController::class, "entreprises"])->middleware("autorisationAuth:entreprises")->name("admin.entreprises");

        Route::get('entreprise/{id}', [EntrepriseController::class, "entreprise"])->middleware("autorisationAuth:entreprises")->name("admin.entreprise");



        Route::get('bonuses', [BonusController::class, "bonuses"])->middleware("autorisationAuth:bonuses")->name("admin.bonuses");

        Route::get('define-bonus', [BonusController::class, "define_bonus"])->middleware("autorisationAuth:bonus_define")->name("admin.define-bonus");



        Route::get('operations/{type?}', [OperationController::class, "operations"])->middleware("autorisationAuth:operations")->name("admin.operations");

        Route::get('operation/{id}', [OperationController::class, "operation"])->middleware("autorisationAuth:operations")->name("admin.operation");



        Route::get('add-faq', [OtherController::class, "add_faq"])->middleware("autorisationAuth:faq_add")->name("admin.add_faq");

        Route::get('faqs', [OtherController::class, "faqs"])->middleware("autorisationAuth:faqs")->name("admin.faqs");

        Route::get('faq/{id}', [OtherController::class, "faq"])->middleware("autorisationAuth:faq_edit")->name("admin.faq");



        Route::get('add-annonce', [OtherController::class, "add_annonce"])->middleware("autorisationAuth:annonce_add")->name("admin.add-annonce");

        Route::get('annonces', [OtherController::class, "annonces"])->middleware("autorisationAuth:annonces")->name("admin.annonces");

        Route::get('annonce/{id}', [OtherController::class, "annonce"])->middleware("autorisationAuth:annonce_edit")->name("admin.annonce");



        Route::get('add-publication', [OtherController::class, "add_publication"])->middleware("autorisationAuth:publication_add")->name("admin.add-publication");

        Route::get('publications', [OtherController::class, "publications"])->middleware("autorisationAuth:publications")->name("admin.publications");

        Route::get('publication/{id}', [OtherController::class, "publication"])->middleware("autorisationAuth:publication_edit")->name("admin.publication");



        Route::get('informations', [AdminController::class, "informations"])->name("admin.informations");

        Route::get('direction/{id}', [AdminController::class, "direction"])->name("admin.direction");


        Route::get('setting', [AdminController::class, "setting"])->name("admin.setting");

        Route::get('disconnect', [AdminController::class, "disconnect"])->name("admin.disconnect");

    });
});
