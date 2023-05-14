<?php

namespace App\Http\Controllers;

use App\Models\KueTradisional;
use Illuminate\Http\Request;
use App\Http\Requests\KueTradisionalRequest;
use App\Http\Requests\KueTradisionalUpdateRequest;

class KueTradisionalController extends Controller
{
    public function index(){
        $KueTradisional = KueTradisional::get();
        return view('index', compact('KueTradisional'));
    }

    public function store(KueTradisionalRequest $request)
    {
        $KueTradisional = new KueTradisional();

        $KueTradisional->nama_kue = $request->nama_kue;
        $KueTradisional->asal_daerah = $request->asal_daerah;

        $KueTradisional->save();

        return redirect('/');
    }

    public function update(KueTradisionalUpdateRequest $request, $id)
    {
        $KueTradisional = KueTradisional::where('id', $id)->first();

        $KueTradisional->nama_kue = $request->nama_kueUpdate;
        $KueTradisional->asal_daerah = $request->asal_daerahUpdate;
        $KueTradisional->update();

        return redirect('/');
    }

    public function hapus($id)
    {
        $KueTradisional = KueTradisional::where('id', $id)->first();

        $KueTradisional->delete();

        return redirect('/');
    }
}
