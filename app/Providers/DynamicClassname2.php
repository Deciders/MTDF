<?php
namespace App\Providers;
use App\ClassModel2; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicClassname2 extends ServiceProvider
{
	public function boot()
	{
	    view()->composer('*',function($view){
	    $view->with('classname2_array',ClassModel2::all()); // srrsy whic is used to stor data 

	    });
	    
	}
}