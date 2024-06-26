<?php

use Illuminate\Routing\Router;

Route::prefix('/wishlistable/v1')->group(function (Router $router) {

  $router->apiCrud([
    'module' => 'wishlistable',
    'prefix' => 'wishlists',
    'controller' => 'WishlistApiController',
    'middleware' => [
      'create' => ['auth:api', 'auth-can:wishlistable.wishlists.create'],
      'update' => ['auth:api', 'auth-can:wishlistable.wishlists.edit'],
      'delete' => ['auth:api', 'auth-can:wishlistable.wishlists.destroy']
    ]
  ]);

});
