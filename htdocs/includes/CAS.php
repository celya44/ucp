<?php
/*
 *  CAS auth +  SAML with attributes
 */

// import phpCAS lib
include_once('CAS/CAS.php');

// Enable debugging
//phpCAS::setDebug();

$serveur = $_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://';
$serveur .= $_SERVER['SERVER_NAME'];
$service_url = $serveur;
if( $_SERVER['SERVER_PORT'] !== "443" && $_SERVER['SERVER_PORT'] !== "80" ){
	$service_url .= ":".$_SERVER['SERVER_PORT'];
}
$serveur .= substr($_SERVER['REQUEST_URI'], 0 , strrpos($_SERVER['REQUEST_URI'], '/'));

// Initialize phpCAS
$cas_host = $ucp->FreePBX->Config->get("UCPCASHOST");
$cas_port = (int)$ucp->FreePBX->Config->get("UCPCASPORT");
$cas_context = '/cas';
$url_ucp = $serveur;
$url_logout = "http://{$cas_host}/logout/";
$url_ldap = $ucp->FreePBX->Config->get("UCPCASLDAP");
$ldap_dn = $ucp->FreePBX->Config->get("UCPCASLDAPDN");
$ldap_search = $ucp->FreePBX->Config->get("UCPCASLDAPSEARCH");
$ldap_parameter = $ucp->FreePBX->Config->get("UCPCASLDAPPARAM");


// Some small code triggered by the logout button
if ( isset($_REQUEST['logout']) ) {
    //phpCAS::logout();
    session_start();
    session_destroy();
    header("Location: {$url_logout}");
    die();
}

// Initialize phpCAS Client
$relMethod = new ReflectionMethod('phpCAS','client');
if ($relMethod->getNumberOfParameters() === 6){
    phpCAS::client(SAML_VERSION_1_1, $cas_host, $cas_port, $cas_context, $service_url);
}else{
    phpCAS::client(SAML_VERSION_1_1, $cas_host, $cas_port, $cas_context);
}

// L'URL de retour après identification sur le CAS
phpCAS::setFixedServiceURL($url_ucp);


// For quick testing you can disable SSL validation of the CAS server.
// THIS SETTING IS NOT RECOMMENDED FOR PRODUCTION.
// VALIDATING THE CAS SERVER IS CRUCIAL TO THE SECURITY OF THE CAS PROTOCOL!
phpCAS::setNoCasServerValidation();

// Force CAS authentication on any page that includes this file
phpCAS::forceAuthentication();

// Si l'utilisateur n'est pas authentifié sur le CAS on continue normalement
if ( ! phpCAS::checkAuthentication() ) {
    echo "<div style=\"text-align:center; padding-top:5em;\">Erreur identification CAS</div>";
    return;
}



$userLogin = phpCAS::getUser();

$userAttributes = phpCAS::getAttributes();

//print_r($userAttributes);
$userSite = strtolower($userAttributes['l']);

$ldap = ldap_connect($url_ldap);

$u = ldap_search($ldap, $ldap_dn, sprintf($ldap_search, $userLogin));
$infos = ldap_get_entries($ldap, $u);

foreach ($infos AS $info){
    $ext = substr($info[$ldap_parameter][0], 9);
    if (!empty($ext)) $userExtension = $ext;
}

// Verrue pour pouvoir tester avec le login de CB
//    if ( $userExtension == 2419 ) $userExtension = 2418;

if ( ! $ucp -> User -> login($userExtension, 'password', false, true) ) 
    echo "<div style=\"text-align:center;padding-top:5em;\">Extension inconnue {$userExtension}</div>";

