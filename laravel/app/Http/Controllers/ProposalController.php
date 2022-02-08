<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proposal;

class ProposalController extends Controller
{
  public static function index()
  {

    $proposals = Proposal::all();

    return $proposals;
  }


  public function create()
  {
    return view('proposal.createProposal');
  }

  public function store(Request $request)
  {
    $proposals = new Proposal;
    $idEmpresa = DB::table('users')->where('USER_MAIL',$request->emailEmpresa )->value('USER_ID');

    $proposals->PROP_TITLE = $request->titulo;
    $proposals->PROP_APPROVED = 0;
    $proposals->PROP_USER_ID = Session('id');
    $proposals->PROP_COMPANY_ID = $idEmpresa;
    $proposals->PROP_JOBS = $request->vagas;
    $proposals->PROP_COURSE = $request->curso;
    $proposals->PROP_DESCRIPTION = $request->descricao;
    $proposals->PROP_PROFILE = $request->perfil;
    $proposals->PROP_INTERESTED = 0;


    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      $requestImage = $request->image;

      $extension = $requestImage->extension();

      $imgName = $requestImage->getClientOriginalName() . "." . $extension;

      $request->image->move(public_path('/img/proposals/'), $imgName);

      $imgName = "/img/proposals/" . "$imgName";

      $proposals->PROP_PHOTO = $imgName;
    } else {
      $proposals->PROP_PHOTO = "/img/proposals/default.jpg";
    }



    $proposals->save();

    return redirect('/main');
  }


  public function details($id)
  {

    $proposal = Proposal::where('PROP_ID','=', $id)->first();

    return view('proposals.proposalDetails', ['proposal' => $proposal]);
  }

    public function proposalApprove($id)
    {
        $proposal = Proposal::where('PROP_ID', $id)->update(['PROP_APPROVED'=>1]);

        return redirect('/main')->with('msg','Proposta Aprovada!');
    }

    public function proposalReject($id)
    {
        $proposal = Proposal::where('PROP_ID', $id)->update(['PROP_APPROVED'=>2]);

        return redirect('/main')->with('msg','Proposta Rejeitada.');
    }

}
