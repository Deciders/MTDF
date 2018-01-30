<?php
namespace App\Providers;
use App\ClassModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicClassname extends ServiceProvider
{
	public function boot()
	{
	    view()->composer('*',function($view){
	    $view->with('classname_array',ClassModel::all()); // srrsy whic is used to stor data 

	    });
	    
	}
}