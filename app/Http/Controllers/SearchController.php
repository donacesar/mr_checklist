<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $str = trim($request->search_str);
        $arr = explode(' ', $str);
        $types = ['sql', 'git', 'Php\PhpString', 'Php\PhpArray', 'regexp', 'docker', 'laravel', 'linux', 'apache', 'nginx'];
        $filtered_arr = [];

        // Удаляем пустые элементы (если были лишнтие пробелы)
        foreach ($arr as $item) {
            if ($item !== '') {
                array_push($filtered_arr, $item);
            }
        }

        $posts = [];

        foreach ($filtered_arr as $word) {
            foreach ($types as $type) {
                $type = ucfirst($type);
                $model = "\\App\Models\\" . $type;
                $items = $model::where('question', 'LIKE', "%{$word}%")->get();
                if ($items->isNotEmpty()) {
                    $items = $items->all();
                    foreach ($items as $item) {
                        $posts[] = $item;
                    }

                }
                $items = $model::where('note', 'LIKE', "%{$word}%")->get();
                if ($items->isNotEmpty()) {
                    $items = $items->all();
                    foreach ($items as $item) {
                        $posts[] = $item;
                    }
                }

            }
        }

        $posts = array_unique($posts);

        $data = serialize($posts);
        file_put_contents('search.txt', $data);
        return redirect()->route('search.index');

    }

    public function index()
    {
        $data = file_get_contents('search.txt');
        $posts = unserialize($data);
        if(empty($posts)) return view('search', compact('posts'));
        $posts = collect($posts)->paginate(8);
        return view('search', compact('posts'));
    }

}
