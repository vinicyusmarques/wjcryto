<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', 'SignIn@processRequest');
SimpleRouter::get('/signIn', 'SignIn@processRequest');
SimpleRouter::get('/signUp', 'SignUp@processRequest');
SimpleRouter::post('/save', 'Persistence@insert');
SimpleRouter::post('/login', 'Login@processRequest');
SimpleRouter::get('/home', 'Home@processRequest');


// API
SimpleRouter::post('/save','Persistence@insert');
SimpleRouter::post('/teste','Login@login');



//SimpleRouter::get('/teste', 'NovoController@teste');
//SimpleRouter::post('/teste', 'NovoController@novoTeste');


