<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{

    /////////////////  UTIL ////////////

    public function index()
    {
        if (null == session('ses'))
            return view("index");
        else
            return $this->getLevel2();
    }

    private function getLevel2()
    {
        if ($this->validateSession())
            return view("level2.level2");
        else
            return redirect("/");
    }

//////////////////////////////////////////////////////
//////////////////////////////////////////////////////



///////////////////// LOGIN  /////////////////////////

    public function validateSession()
    {
        if (null == session('ses')) {
           return false;
        } else {
            return true;
        }
    }

    public function attemptLogin(Request $request)
    {
        $username = trim($request->get("username"));
        $password = trim($request->get("password"));

        $user = DB::table('usersx')
            ->where('username', $username)
            ->where('password', md5($password))
            ->first();

        if (null != $user) {
            session(["ses" => md5($username)]);
            return redirect("/requestlevel2?flag=" . md5($username));
        }

        return "<script>alert('Incorrect Username or password!'); window.location.href='/'</script>";

    }

    public function logout()
    {
        session(["ses" => null]);
        return redirect("/");
    }

    public function requestLevel2(Request $request)
    {
        $flag = $request->get("flag");
        if ($flag == (session('ses'))) {
            return $this->getLevel2();
        } else
            return redirect("/");
    }

    public function requestLevel3(Request $request)
    {
        $flag = $request->get('flag');
        //Iron Man Sucks
        if ($flag == "abcd")
            return $this->getLevel3();
        else
            return back();
    }


    private function getLevel4()
    {
        if ($this->validateSession())
            return view("level4.level4");
        else
            return redirect("/");
    }

    /////   VALIDATION REQUESTS   ///////

    private function getLevel3()
    {
        if ($this->validateSession())
            return view("level3.level3");
        else
            return redirect("/");
    }

    public function requestLevel4(Request $request)
    {

    }

    public function requestLevel5(Request $request)
    {

    }

    public function requestLevel6(Request $request)
    {

    }




}
