<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('Home', function (BreadcrumbTrail $trail) {
    $trail->push('Main Page', url('/'));
});

// Home > DMC Games
Breadcrumbs::for('DMC1', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DMC1', url('/DMC1'));
});

Breadcrumbs::for('DMC2', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DMC2', url('/DMC2'));
});

Breadcrumbs::for('DMC3', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DMC3', url('/DMC3'));
});

Breadcrumbs::for('DMC4', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DMC4', url('/DMC4'));
});

Breadcrumbs::for('DmC', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DmC', url('/DmC'));
});

Breadcrumbs::for('DMC5', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('DMC5', url('/DMC5'));
});

//Start of DMC1 Pages

//DMC1 > Categories
Breadcrumbs::for('Any', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Any%', url('/DMC1:Any'));
});

Breadcrumbs::for('All', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('100%', url('/DMC1:All'));
});

Breadcrumbs::for('AC', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('All Collectibles', url('/DMC1:AC'));
});

Breadcrumbs::for('Low', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Low%', url('/DMC1:Low'));
});

// DMC1 > Bosses
Breadcrumbs::for('Phantom', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Phantom', url('/DMC1:Phantom'));
});

Breadcrumbs::for('Nelo', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Nelo Angelo', url('/DMC1:Nelo'));
});

Breadcrumbs::for('Griffon', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Griffon', url('/DMC1:DMC1:Griffon'));
});

Breadcrumbs::for('Nightmare', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Nightmare', url('/DMC1:DMC1:Nightmare'));
});

//DMC1 > General Links
Breadcrumbs::for('Getting_Started', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('Getting Started', url('/DMC1:Getting_Started'));
});

Breadcrumbs::for('Frequently_Asked_Questions', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC1');
    $trail->push('FAQs', url('/DMC1:Frequently_Asked_Questions'));
});
//End of DMC1 Pages

//DMC2 Pages
Breadcrumbs::for('DMC2Dante', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC2');
    $trail->push('Dante', url('/DMC2:Dante'));
});

Breadcrumbs::for('DMC2Lucia', function (BreadcrumbTrail $trail) {
    $trail->parent('DMC2');
    $trail->push('Lucia', url('/DMC2:Lucia'));
});

// Home > Blog > [Category]
//Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category));
//});