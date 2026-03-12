<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Inicio
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});

// Somos
Breadcrumbs::for('somos', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Quienes somos', route('somos'));
});


// Somos
Breadcrumbs::for('quienes-somos', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Quienes somos', route('somos'));
});

// Trayectoria
Breadcrumbs::for('trayectoria', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Trayectoria', route('trayectoria'));
});

// Trayectoria
Breadcrumbs::for('servicios', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Servicios', route('servicios'));
});

Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Productos', route('products.index'));
});

Breadcrumbs::for('producto', function (BreadcrumbTrail $trail, $name) {
    $trail->push('Inicio', route('home'));
    $trail->push('Productos', route('products'));
    $trail->push($name, route('products')); 
});

Breadcrumbs::for('contacto', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Contacto', route('contacto'));
});


Breadcrumbs::for('aviso-de-privacidad', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Aviso de privacidad', route('aviso-de-privacidad'));
});

Breadcrumbs::for('blogs', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
    $trail->push('Blogs', route('blogs.index'));
});

Breadcrumbs::for('blog.show', function (BreadcrumbTrail $trail, $title) {
    $trail->push('Inicio', route('home'));
    $trail->push('Blogs', route('blogs.index'));
    $trail->push($title, route('blog.show', $title));   
});


// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});


