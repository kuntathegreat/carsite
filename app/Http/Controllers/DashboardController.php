<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23-Nov-21
 * Time: 2:59 PM
 */

namespace App\Http\Controllers;


class DashboardController extends Controller {
    public function index(){
        return view('admin.dashboard');
    }
}