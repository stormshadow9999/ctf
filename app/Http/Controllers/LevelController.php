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

    private function getLevel3()
    {
        if ($this->validateSession())
            return view("level3.level3");
        else
            return redirect("/");
    }

    private function getLevel4()
    {
        if ($this->validateSession())
            return view("level4.level4");
        else
            return redirect("/");
    }

    private function getLevel5()
    {
        if ($this->validateSession())
            return view("level5.level5");
        else
            return redirect("/");
    }

    private function getLevel6()
    {
        if ($this->validateSession())
            return view("level6.level6");
        else
            return redirect("/");
    }

    private function getLevel7()
    {
        if ($this->validateSession())
            return view("level7.level7");
        else
            return redirect("/");
    }

    private function getLevel8()
    {
        if ($this->validateSession()) {
            $data['data'] = DB::table('emp')->select('*')->get();

            return view("level8.level8")->with($data);
        } else
            return redirect("/");
    }

    private function getLevel9()
    {
        if ($this->validateSession())
            return view("level9.level9");
        else
            return redirect("/");
    }


/////////////////////   LOGIN   ////////////////////////

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


    ////////////   VALIDATION REQUESTS   ////////////

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
        if ($flag == "I was born to rule the Seven Kingdoms, and I will")
            return $this->getLevel3();
        else
            return back();
    }


    public function requestLevel4(Request $request)
    {
        if ($request->get('flag') == "Mother of Dragons") {
            return $this->getLevel4();
        } else
            return back();
    }

    public function requestLevel5(Request $request)
    {
        if ($request->get('flag') == "valar morghulis") {
            return $this->getLevel5();
        } else
            return back();
    }

    public function requestLevel6(Request $request)
    {
        if ($request->get('flag') == "ygritteSnow") {
            return $this->getLevel6();
        } else
            return back();
    }


    public function requestLevel7(Request $request)
    {
        if ($request->get('flag') == "Wh3nyY0up|ayTh3Gam30fThr0n3$,Y0uW1n0rY0uDi3!") {
            return $this->getLevel7();
        } else
            return back();
    }

    public function requestLevel8(Request $request)
    {
        if ($request->get('flag') == "87afc1cdbf4c4db7b8305dffaa3faf16") {
            return $this->getLevel8();
        } else
            return back();
    }

    public function requestLevel9(Request $request)
    {
        if ($request->get('flag') == "d28b0ffb74b6963b0f5d167f960a12c1") {
            return $this->getLevel9();
        } else
            return back();
    }


    ////  SQL I Search   //////


    public function searchLevel8(Request $request)
    {
        $key = $request->get('key');

        $query = "select * from emp where emp_name='" . $key . "'";

        $data['data'] = DB::select($query);

        return view("level8.level8")->with($data);
    }

}
