<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public const ROUTE_NAME = '';
    public string $model_name = '';

    public function index()
    {
        $items = $this->model_name::orderBy('rank')->paginate(5);
        return view(static::ROUTE_NAME . '.index', compact('items'));
    }

    public function store(Request $request)
    {
        transaction(function () use ($request){
            $data = $request->all();
            $item = $this->model_name::create($data);
            $data = ['rank' => $item->id];
            $item = $this->model_name::find($item->id);
            $item->update($data);
        });
        return redirect()->route(static::ROUTE_NAME . '.index');

    }

    public function edit($item)
    {
        $item = $this->model_name::find($item);
        return view(static::ROUTE_NAME . '.edit', compact('item'));
    }

    public function update(Request $request, $item)
    {

        $data = $request->all();
        $item = $this->model_name::find($item);
        $item->update($data);
        return redirect()->route(static::ROUTE_NAME . '.index');
    }


    public function delete($item)
    {
        $item = $this->model_name::find($item);
        $item->delete();
        return redirect()->route(static::ROUTE_NAME . '.index');
    }

    public function up($item)
    {
        $item = $this->model_name::find($item);
        $first = $this->model_name::all()->sortBy('rank')->first();

        if ($item->rank === $first->rank) return redirect()->route(static::ROUTE_NAME . '.index');

        $rank_all = [];
        $all = $this->model_name::all()->sortBy('rank');
        foreach ($all as $one) {
            array_push($rank_all, $one->rank);
        }
        $current_rank_index = array_search($item->rank, $rank_all);
        $pre_rank = $rank_all[$current_rank_index - 1];

        $pre = $this->model_name::where('rank', $pre_rank)->first();
        $rank = $item->rank;
        transaction(function () use ($item, $pre, $rank) {
            $item->update(['rank' => $pre->rank]);
            $pre->update(['rank' => $rank]);
        });

        return redirect()->route(static::ROUTE_NAME . '.index');

    }

    public function down($item)
    {
        $item = $this->model_name::find($item);
        $last = $this->model_name::all()->sortByDesc('rank')->first();

        if ($item->rank === $last->rank) return redirect()->route(static::ROUTE_NAME . '.index');

        $rank_all = [];
        $all = $this->model_name::all()->sortBy('rank');
        foreach ($all as $one) {
            array_push($rank_all, $one->rank);
        }
        $current_rank_index = array_search($item->rank, $rank_all);
        $post_rank = $rank_all[$current_rank_index + 1];

        $post = $this->model_name::where('rank', $post_rank)->first();
        $rank = $item->rank;
        transaction(function () use ($item, $post, $rank) {
            $item->update(['rank' => $post->rank]);
            $post->update(['rank' => $rank]);
        });

        return redirect()->route(static::ROUTE_NAME . '.index');
    }
}
