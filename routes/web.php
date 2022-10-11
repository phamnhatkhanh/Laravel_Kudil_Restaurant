<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use \App\Http\Controllers\Client\AboutController;
use \App\Http\Controllers\Client\BlogController;
use \App\Http\Controllers\Client\ContactController;
use \App\Http\Controllers\Client\EventController;
use \App\Http\Controllers\Client\HomeController;
use \App\Http\Controllers\Client\MenuController;
use \App\Http\Controllers\Client\MenuWitImageController;
use \App\Http\Controllers\Client\MenuGalleryController;
// use \App\Http\Controllers\Client\MenuGalleryController;
use \App\Http\Controllers\Client\ReservationController;
use \App\Http\Controllers\Client\ShopController;

use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\BlogController as AdminBlogController;
use \App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use \App\Http\Controllers\Admin\CommentController as AdminCommentController;
use \App\Http\Controllers\Admin\TagController as AdminTagController;
use \App\Http\Controllers\Admin\ProductController as AdminProductController;
use \App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use \App\Http\Controllers\Admin\TableController as AdminTableController;
use \App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use \App\Http\Controllers\Admin\PageController as AdminPageController;

use App\Models\Tag;
use App\Models\Table;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Page;
use App\Models\Section;




Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/event', [EventController::class, 'index'])->name('event');

Route::get('/menu',[MenuController::class, 'index']) -> name('root-menu');
Route::get('/menu',[MenuController::class, 'index']) -> name('root-menu');
Route::get('/menu-with-image',[MenuWitImageController::class, 'index']) -> name('root-menu');
Route::get('/gallery',[MenuGalleryController::class, 'index']) -> name('root-menu');

Route::get('/blog',[BlogController::class, 'index']) -> name('root-blog');
Route::get('/blog/bordered',[BlogController::class, 'blogBordered']) -> name('root-blog');
Route::get('/blog/classic',[BlogController::class, 'blogClassic']) -> name('root-blog');
Route::get('/blog/date-and-author-left/',[BlogController::class, 'blogDateAndAuthorLeft']) -> name('root-blog');
Route::get('/blog/fashion',[BlogController::class, 'blogFashion']) -> name('root-blog');
Route::get('/blog/modern',[BlogController::class, 'blogModern']) -> name('root-blog');



Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');


Route::prefix('admin')->group(function () {

    Route::get('/',function(){
        return view('backend.dashboard');
    });

    Route::get('/manage-contents/pages/{page}',[AdminPageController::class, 'index']);
    // Route::match(['get', 'post'], '/manage-contents/pages/create', [AdminPageController::class, 'createSection'])->name('createSection');
    Route::get( '/manage-contents/pages/{page}/edit/{id}', [AdminPageController::class, 'editSection'])->name('editSection');;
    Route::get('/manage-contents/pages/{page}/delete/{id}', [AdminPageController::class, 'deleteSection'])->name('deleteSection');


    Route::prefix('/users')->group(function () {
        Route::get('/',[UserController::class, 'index']);
        Route::match(['get', 'post'], '/create', [UserController::class, 'createUser'])->name('createUser');
        Route::match(['get', 'post'], '/edit/{id}', [UserController::class, 'editUser'])->name('editUser');;
        Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    });

    Route::prefix('/blogs')->group(function () {
        Route::get('/',[AdminBlogController::class, 'index']);
        Route::match(['get', 'post'], '/create', [AdminBlogController::class, 'createBlog'])->name('createBlog');
        Route::match(['get', 'post'], '/edit/{id}', [AdminBlogController::class, 'editBlog'])->name('editBlog');;
        Route::get('/delete/{id}', [AdminBlogController::class, 'deleteBlog'])->name('deleteBlog');
    });

    Route::prefix('/articles')->group(function () {
        Route::get('/',[AdminArticleController::class, 'index']);
        Route::match(['get', 'post'], '/create', [AdminArticleController::class, 'createArticle'])->name('createArticle');
        Route::match(['get', 'post'], '/edit/{id}', [AdminArticleController::class, 'editArticle'])->name('editArticle');;
        Route::get('/delete/{id}', [AdminArticleController::class, 'deleteArticle'])->name('deleteArticle');
    });

    Route::get('/comments',[AdminCommentController::class, 'index']);
    Route::match(['get', 'post'], '/comments/create', [AdminCommentController::class, 'createComment'])->name('createComment');
    Route::match(['get', 'post'], '/comments/edit/{id}', [AdminCommentController::class, 'editComment'])->name('editComment');;
    Route::get('/comments/delete/{id}', [AdminCommentController::class, 'deleteComment'])->name('deleteComment');

    Route::get('/tags',[AdminTagController::class, 'index']);
    Route::match(['get', 'post'], '/tags/create', [AdminTagController::class, 'createTag'])->name('createTag');
    Route::match(['get', 'post'], '/tags/edit/{id}', [AdminTagController::class, 'editTag'])->name('editTag');;
    Route::get('/tags/delete/{id}', [AdminTagController::class, 'deleteTag'])->name('deleteTag');

    Route::get('/products',[AdminProductController::class, 'index']);
    Route::match(['get', 'post'], '/products/create', [AdminProductController::class, 'createProduct'])->name('createProduct');
    Route::match(['get', 'post'], '/products/edit/{id}', [AdminProductController::class, 'editProduct'])->name('editProduct');;
    Route::get('/products/delete/{id}', [AdminProductController::class, 'deleteProduct'])->name('deleteProduct');

    Route::get('/reviews',[AdminReviewController::class, 'index']);
    Route::match(['get', 'post'], '/reviews/create', [AdminReviewController::class, 'createReview'])->name('createReview');
    Route::match(['get', 'post'], '/reviews/edit/{id}', [AdminReviewController::class, 'editReview'])->name('editReview');;
    Route::get('/reviews/delete/{id}', [AdminReviewController::class, 'deleteReview'])->name('deleteReview');

    Route::get('/tables',[AdminTableController::class, 'index']);
    Route::match(['get', 'post'], '/tables/create', [AdminTableController::class, 'createTable'])->name('createTable');
    Route::match(['get', 'post'], '/tables/edit/{id}', [AdminTableController::class, 'editTable'])->name('editTable');;
    Route::get('/tables/delete/{id}', [AdminTableController::class, 'deleteTable'])->name('deleteTable');

    Route::get('/reservations',[AdminReservationController::class, 'index']);
    Route::match(['get', 'post'], '/reservations/create', [AdminReservationController::class, 'createReservation'])->name('createReservation');
    Route::match(['get', 'post'], '/reservations/edit/{id}', [AdminReservationController::class, 'editReservation'])->name('editReservation');;
    Route::get('/reservations/delete/{id}', [AdminReservationController::class, 'deleteReservation'])->name('deleteReservation');



});

Route::match(['get', 'post'], '/test', function(Request $request){
     return response()->json(['blogs' => Blog::all()]);


});


