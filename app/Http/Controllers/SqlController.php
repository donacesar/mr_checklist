<?php

namespace App\Http\Controllers;

use App\Models\Php;
use App\Models\Sql;
use Illuminate\Http\Request;

class SqlController extends Controller
{

    public function index()
    {

        $sqls = Sql::all();
        return view('sql.index', compact('sqls'));
    }


    public function create()
    {

        return redirect(route('sqls.index'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $php = Sql::create($data);
        $data = ['rank' => $php->id];
        $php = Sql::find($php->id);
        $php->update($data);
        return redirect(route('sqls.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit(Sql $sql)
    {
        return view('sql.edit', compact('sql'));
    }


    public function update(Request $request, Sql $sql)
    {
        $data = $request->all();
        $sql_item = Sql::find($sql->id);
        $sql_item->update($data);
        return redirect(route('sqls.index'));
    }


    public function destroy($id)
    {
        //
    }

    public function up(Sql $sql)
    {
        dd('up ' . $sql->id);
    }

    public function down(Sql $sql)
    {
        dd('down ' . $sql->id);
    }
}
