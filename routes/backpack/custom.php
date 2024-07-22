<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('activity', 'ActivityCrudController');
    Route::crud('activity-parent', 'ActivityParentCrudController');
    Route::crud('babysitter-custody', 'BabysitterCustodyCrudController');
    Route::crud('babysitter-user', 'BabysitterUserCrudController');
    Route::crud('children', 'ChildrenCrudController');
    Route::crud('city', 'CityCrudController');
    Route::crud('comment', 'CommentCrudController');
    Route::crud('custody-criteria', 'CustodyCriteriaCrudController');
    Route::crud('favorites', 'FavoritesCrudController');
    Route::crud('geographic-coodinate', 'GeographicCoodinateCrudController');
    Route::crud('good-plan', 'GoodPlanCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('parent-user', 'ParentUserCrudController');
    Route::crud('postal-code-localite', 'PostalCodeLocaliteCrudController');
    Route::crud('question', 'QuestionCrudController');
    Route::crud('response', 'ResponseCrudController');
    Route::crud('user', 'UserCrudController');
}); // this should be the absolute last line of this file