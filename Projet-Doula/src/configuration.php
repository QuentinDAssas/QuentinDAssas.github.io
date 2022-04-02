<?php

/**
 * FICHIER DE CONFIGURATION DU SITE !
 * ----------------------
 * On met en place ici tout ce qui sert à la configuration
 */

/**
 * MISE EN PLACE DE LA SESSION
 * ---------------------------
 * On le sait très bien, on aura besoin de la session dans ce site dans plus ou moins tous les fichiers
 * C'est donc une bonne pratique de la mettre en oeuvre tout de suite ici avant toute autre action
 *
 * Comprenez bien : le fichier configuration.php sera la première chose qui s'exécutera quand on appellera notre site.
 * On est donc surs que session_start() sera appelé tout le temps, et avant tout le reste !
 */
session_start();

/**
 * CONFIGURATION DE LA BASE DE DONNEES
 * -----------------------------------
 * Ca facilite l'évolution, le jour où on change de base de données ou que l'utilisateur
 * ou que le mot de passe change, on peut simplement modifier ce fichier
 * et hop ! Tout remarche à nouveau
 */


/**
 *BDD 3wa
*/
 
const DB_HOST = "db.3wa.io";
const DB_USER = "quentindas";
const DB_PASSWORD = "be9116ed4b0c8406c732cdea3c2c73dc";
const DB_NAME = "quentindas_projet_v2";


/**
 *BDD local
*/

// const DB_HOST = "localhost";
// const DB_USER = "testdb";
// const DB_PASSWORD = "9sx0UjtxV8fuxJTf";
// const DB_NAME = "projet";

const SECRETKEY = 'mysecretkey1234';

/**
 * LISTE DES TABLES de LA BDD (à modifier)
 */
 
const T_USERS = "users";
const T_MED = "images";
const T_ARTI = "articles";
const T_LINK = "links";




date_default_timezone_set('Europe/Paris');















