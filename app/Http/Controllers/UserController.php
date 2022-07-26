<?php
 
namespace App\Http\Controllers;

# When installed via composer
#  require_once 'vendor/autoload.php';
 
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

        syslog(LOG_INFO, "LOG_INFO 1");
        syslog(LOG_DEBUG, "LOG_DEBUG 2");
        syslog(LOG_WARNING, "LOG_WARNING 3");
        syslog(LOG_ERR, "LOG_ERR 4"); 



        // error_log("error_log 000", 0);
        // error_log("error_log 111", 1);
        // error_log("error_log 333", 3);


        echo "hello world via echo";

        print "hello world via print";


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