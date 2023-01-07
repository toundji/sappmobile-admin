<?php

use App\Models\AgentEntreprise;
use App\Models\Bonus;
use App\Models\Category;
use App\Models\Client;
use App\Models\Conducteur;
use App\Models\Entreprise;
use App\Models\Gestionnaire;
use App\Models\PorteFeuille;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

if(!function_exists('f_page_title')) {
    function f_page_title(?string $title = null) : string{
        return $title ? $title.' > '.config("app.name") : config("app.name");
    }
}

function f_getCookie($cookieName) {
    return isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : null;
}

function f_hasCookie($cookieName) {
    return isset($_COOKIE[$cookieName]) ? true : false;
}

function f_setCookie($cookieName, $cookieValue) {
    setcookie($cookieName, $cookieValue, time() + 60 * 60 * 24 * 365 * 2, '/');
}

function f_deleteCookie($cookieName) {
    setcookie($cookieName, "", time() - 3600, "/");
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



function active($routeName) {
    return FacadesRoute::is($routeName) ? "active" : "";
}

function boolToInt($var) {
    return ($var) ? 1 : 0;
}

function canConnect() {
    return f_hasCookie(md5('token_admin'));
}


function getUser($id) {
    return User::where('id', $id)->first();
}

function getClientByUser($id) {
    return Client::where('user_id', $id)->first();
}

function getConducteurByUser($id) {
    return Conducteur::where('user_id', $id)->first();
}

function getUserByPhone($email) {
    return User::where('phone', $email)->first();
}

function getDateLikeNow() {
    return date('Y-m-d H:i:s');
}

function getPortefeuille($id) {
    $compte = PorteFeuille::where('user_id', $id)->first();
    return ($compte != null) ? $compte->solde : 0;
}

function getBonus($id) {
    $bonus = Bonus::where('user_id', $id)->first();
    return ($bonus != null) ? $bonus->valeur_bonus : 0;
}

function getCategory($id) {
    return Category::where('id', $id)->first();
}

function getEntreprise($id) {
    return Entreprise::where('id', $id)->first();
}

function getAgentEntreprise($id) {
    return AgentEntreprise::where('id', $id)->first();
}

function getConducteur($id) {
    return Conducteur::where('id', $id)->first();
}

function getClient($id) {
    return Client::where('id', $id)->first();
}

function getGestionnaire($id) {
    return Gestionnaire::where('id', $id)->first();
}



function autorisationAuth($autorisation, $id = -1) {
    $id = ($id === -1) ? f_getCookie(md5('token_sapp')) : $id;
    $admin = Gestionnaire::where('id', $id)->first();
    return ($admin->is_gourou === 1) ? true : (str_contains($admin->role, $autorisation.",") ? true : false);
}


function rightAuth() {
    $admin = Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->first();
    return str_contains($admin->role, "right,") ? true : false;
}
