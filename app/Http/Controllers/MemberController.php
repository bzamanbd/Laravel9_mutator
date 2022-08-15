<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        $member = new Member();
        $member->name='Nnancy';
        $member->address='mirpur';
        $member->save();
        return 'data added successfully';
    }
}