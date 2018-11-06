<?php

use SuHyMeBlaS\View;

$router['/'] = function() {
    return View::render('home');
};
