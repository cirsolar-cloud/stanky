<?php
 
namespace App\Http\Controllers;

# When installed via composer
require_once 'vendor/autoload.php';
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from HRS001MST01 limit 3');

 
        return $users; 
    }


    /**
     * 
     * Faker
     * 
     * 
     */
    public function faker()
    {
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();

 
        return   $faker->text;
    }
}