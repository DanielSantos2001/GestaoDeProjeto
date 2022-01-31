<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proposal;

class ProposalController extends Controller
{
    public function index(){
          $proposals = Proposal::all();

        return view('welcome', ['proposals'=>$proposals]);
    }

    public function create(){
      return view('proposal.createProposal');
    }

    public function store(Request $request){
          $proposals = new Proposal;

          $proposals->PROP_TITLE = $request->titulo;
          $proposals->PROP_JOBS = $request->vagas;
          $proposals->PROP_COURSE = $request->curso;
          $proposals->PROP_INTERESTED = 0;


          if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imgName = $requestImage->getClientOriginalName().".".$extension;

            $request->image->move(public_path('/img/proposals/'),$imgName);

            $imgName="/img/proposals/"."$imgName";

            $proposals->PROP_PHOTO = $imgName;

          }else {
                    $proposals->PROP_PHOTO = "/img/proposals/default.jpg";
          }



          $proposals->save();

          return redirect('/');


    }



}
