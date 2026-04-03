<?php



use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produit');
});
// Route::get('/teste', function () {
//     return "bonjours";
// });
Route::get('/produit',[ProduitController::class ,"index"])->name("produit.index");
Route::get('/formulaire',[ProduitController::class ,"create"])->name("produit.create");
Route::get('/detail/{produit}',[ProduitController::class ,"show"])->name("produit.detail");
Route::get('/edit/{produit}',[ProduitController::class ,"edit"])->name("produit.edit");
Route::post('/produit',[ProduitController::class ,"store"])->name("produit.store");
Route::put('/update/{produit}',[ProduitController::class ,"update"])->name("produit.update");
Route::delete('/delete/{produit}',[ProduitController::class ,"destroy"])->name("produit.delete");
