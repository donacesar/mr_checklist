<?php

namespace App\Http\Controllers;

use App\Models\Php;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public const TYPE = '';
    public string $class_name = '';

    public function index()
    {
        $items = $this->class_name::all()->sortBy('rank');
        return view(static::TYPE . '.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = $this->class_name::create($data);
        $data = ['rank' => $item->id];
        $item = $this->class_name::find($item->id);
        $item->update($data);
        return redirect()->route(static::TYPE . '.index');
    }

    public function edit($item)
    {
        $item = $this->class_name::find($item);
        return view(static::TYPE . '.edit', compact('item'));
    }

    public function update(Request $request, $item)
    {

        $data = $request->all();
        $item = $this->class_name::find($item);
        $item->update($data);
        return redirect()->route(static::TYPE . '.index');
    }


    public function delete($item)
    {
        $item = $this->class_name::find($item);
        $item->delete();
        return redirect()->route(static::TYPE . '.index');
    }

    public function up($item)
    {
        $item = $this->class_name::find($item);
        $first = $this->class_name::all()->sortBy('rank')->first();

        if ($item->rank === $first->rank) return redirect()->route(static::TYPE . '.index');

        $rank_all = [];
        $all = $this->class_name::all()->sortBy('rank');
        foreach ($all as $one) {
            array_push($rank_all, $one->rank);
        }
        $current_rank_index = array_search($item->rank, $rank_all);
        $pre_rank = $rank_all[$current_rank_index - 1];

        $pre = $this->class_name::where('rank', $pre_rank)->first();
        $rank = $item->rank;
        DB::transaction(function () use ($item, $pre, $rank) {
            $item->update(['rank' => $pre->rank]);
            $pre->update(['rank' => $rank]);
        });

        return redirect()->route(static::TYPE . '.index');

    }

    public function down($item)
    {
        $item = $this->class_name::find($item);
        $last = $this->class_name::all()->sortByDesc('rank')->first();

        if ($item->rank === $last->rank) return redirect()->route(static::TYPE . '.index');

        $rank_all = [];
        $all = $this->class_name::all()->sortBy('rank');
        foreach ($all as $one) {
            array_push($rank_all, $one->rank);
        }
        $current_rank_index = array_search($item->rank, $rank_all);
        $post_rank = $rank_all[$current_rank_index + 1];

        $post = $this->class_name::where('rank', $post_rank)->first();
        $rank = $item->rank;
        DB::transaction(function () use ($item, $post, $rank) {
            $item->update(['rank' => $post->rank]);
            $post->update(['rank' => $rank]);
        });

        return redirect()->route(static::TYPE . '.index');
    }
}
