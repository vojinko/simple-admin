<?php
/**
 * Created by PhpStorm.
 * User: MIlos
 * Date: 12-Oct-15
 * Time: 9:27 AM
 */
namespace Vojinko\SimpleAdmin;
use App\Http\Controllers\Controller;
use App\User;

class SimpleAdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('simpleAdmin::admin')->with('users', $users);
    }
}