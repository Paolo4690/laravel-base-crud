<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    protected $rules = [
        'title' => 'required|unique:comics|max:100',
        'description' => 'required',
        'thumb' => 'required|url|max:250',
        'price' => 'required|numeric',
        'series' => 'required|max:50',
        'sale_date' => 'nullable|date',
        'type' => 'max:50'
    ];
    protected $rulesEdit = [
        'title' => 'required|max:100',
        'description' => 'required',
        'thumb' => 'required|url|max:250',
        'price' => 'required|numeric',
        'series' => 'required|max:50',
        'sale_date' => 'nullable|date',
        'type' => 'max:50'
    ];
    protected $messages = [
        'title.required' => 'The title field is required.',
        'title.max' => 'The title may not be greater than 100 characters.',
        'description.required' => 'The description field is required.',
        'thumb.required' => 'The link of image field is required.',
        'thumb.url' => 'The link of image must be a valid URL.',
        'thumb.max' => 'The link of image may not be greater than 250 characters.',
        'price.required' => 'The price field is required.',
        'price.numeric' => 'The price must be a number.',
        'series.required' => 'The series field is required.',
        'series.max' => 'The series may not be greater than 50 characters.',
        'sale_date.date' => 'The sale date must be a date.',
        'type.max' => 'The type may not be greater than 50 characters.',
    ];

    public function index()
    {
        $comics = Comic::paginate(8);
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules, $this->messages);

        $formData = $request->all();

        $newComic = Comic::create($formData);
        return redirect()->route('comics.show', $newComic->id)->with('status', 'Completed with success!');
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {

        $this->rules['title'] = [
            'required',
            Rule::unique('comics')->ignore($comic),
            'max:100'
        ];

        $request->validate($this->rules);

        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'Deleted comic id: ' . $comic->id);
    }
}
