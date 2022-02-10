<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proposal;

use App\Models\Attachments;

use Illuminate\Support\Facades\DB;

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

    $validated = $request->validate([
      'titulo'=>'required|max:255',
      'emailEmpresa'=>'required|max:255',
      'vagas'=>'required',
      'descricao'=>'required|max:500',
      'perfil'=>'required|max:255',
    ]);


    $idEmpresa = DB::table('users')->where('USER_MAIL', $request->emailEmpresa)->value('USER_ID');
    if (!empty($idEmpresa)) {
      if(DB::table('users')->where('USER_ID', $idEmpresa)->value('USER_TYPE')=='empresa'){



    $proposals->PROP_TITLE = $request->titulo;
    $proposals->PROP_APPROVED = $request->aprovado;
    $proposals->PROP_USER_ID = Session('id');
    $proposals->PROP_COMPANY_ID = $idEmpresa;
    $proposals->PROP_JOBS = $request->vagas;
    $proposals->PROP_COURSE = $request->curso;
    $proposals->PROP_DESCRIPTION = $request->descricao;
    $proposals->PROP_PROFILE = $request->perfil;
    $proposals->PROP_INTERESTED = 0;


    if ($request->hasFile('imagecp') && $request->file('imagecp')->isValid()) {

      $requestImage = $request->imagecp;

      $extension = $requestImage->extension();

      $imgName = $requestImage->getClientOriginalName() . "." . $extension;

      $request->imagecp->move(public_path('/img/proposals/'), $imgName);

      $imgName = "/img/proposals/" . "$imgName";

      $proposals->PROP_PHOTO = $imgName;
    } else {
      $proposals->PROP_PHOTO = "/img/proposals/default.jpg";
    }

    //FILE



    $proposals->save();


    $id = $proposals->id;

    if ($request->hasFile('fileSaver')) {

      $files = $request->file('fileSaver');

      foreach ($files as $file) {

        $att = new Attachments;

        $requestFile = $file;

        $fileName = $requestFile->getClientOriginalName() . "." . $requestFile->extension();;

        $file->move(public_path('/img/proposals/'), $fileName);

        $fileName = "/img/proposals/" . "$fileName";

        $att->ATT_PATH = $fileName;
        $att->PROP_ID = $id;
        $att->save();
      }
    }



    return redirect('/main');
  }else{return redirect()->back()->withErrors(['O email inserido não é de uma empresa.','O email inserido não é de uma empresa.']);}
}else{return redirect()->back()->withErrors(['O email inserido é inválido.','O email inserido é inválido.']);;}
  }




  public function details($id)
  {

    $proposal = Proposal::where('PROP_ID', '=', $id)->first();

    return view('proposals.proposalDetails', ['proposal' => $proposal]);
  }

  public function proposalApprove($id)
  {
    $proposal = Proposal::where('PROP_ID', $id)->update(['PROP_APPROVED' => 1]);

    return redirect('/main')->with('msg', 'Proposta Aprovada!');
  }

  public function proposalReject($id)
  {
    $proposal = Proposal::where('PROP_ID', $id)->update(['PROP_APPROVED' => 2]);

    return redirect('/main')->with('msg', 'Proposta Rejeitada.');
  }
}
