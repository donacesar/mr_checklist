<?php

namespace App\Http\Controllers;

use App\Models\Sql;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlController extends Controller
{

    public function index()
    {

        $sqls = Sql::all()->sortBy('rank');
        return view('sql.index', compact('sqls'));
    }


    public function create()
    {

        return redirect()->route('sqls.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $php = Sql::create($data);
        $data = ['rank' => $php->id];
        $php = Sql::find($php->id);
        $php->update($data);
        return redirect()->route('sqls.index');
    }


    public function show($id)
    {
        return redirect()->route('sqls.index');
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
        return redirect()->route('sqls.index');
    }


    public function destroy(Sql $sql)
    {
        $sql->delete();
        return redirect()->route('sqls.index');
    }

    public function up(Sql $sql)
    {
        $first_sql = Sql::all()->sortBy('rank')->first();

        if ($sql->rank === $first_sql->rank) return redirect()->route('sqls.index');

        $rank_all = [];
        $all_sql = Sql::all()->sortBy('rank');
        foreach ($all_sql as $item) {
            array_push($rank_all, $item->rank);
        }
        $current_rank_index = array_search($sql->rank, $rank_all);
        $pre_sql_rank = $rank_all[$current_rank_index - 1];

        $pre_sql = Sql::where('rank', $pre_sql_rank)->first();
        $rank = $sql->rank;
        DB::transaction(function () use ($sql, $pre_sql, $rank) {
            $sql->update(['rank' => $pre_sql->rank]);
            $pre_sql->update(['rank' => $rank]);
        });

        return redirect()->route('sqls.index');

    }

    public function down(Sql $sql)
    {
        $last_sql = Sql::all()->sortByDesc('rank')->first();

        if ($sql->rank === $last_sql->rank) return redirect()->route('sqls.index');

        $rank_all = [];
        $all_sql = Sql::all()->sortBy('rank');
        foreach ($all_sql as $item) {
            array_push($rank_all, $item->rank);
        }
        $current_rank_index = array_search($sql->rank, $rank_all);
        $post_sql_rank = $rank_all[$current_rank_index + 1];

        $post_sql = Sql::where('rank', $post_sql_rank)->first();
        $rank = $sql->rank;
        DB::transaction(function () use ($sql, $post_sql, $rank) {
            $sql->update(['rank' => $post_sql->rank]);
            $post_sql->update(['rank' => $rank]);
        });

        return redirect()->route('sqls.index');
    }
}
