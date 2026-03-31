<?php



use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produit');
});
// Route::get('/teste', function () {
//     return "bonjours";
// });
Route::get('/produit',[ProduitController::class ,"index"]);
Route::get('/formulaire',[ProduitController::class ,"create"]);
Route::get('/detail/{id}',[ProduitController::class ,"show"])->name("produit.detail");
