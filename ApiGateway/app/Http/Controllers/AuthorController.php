<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // TODO
    }

    /**
     * Return the list of authors
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Create one new author
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain and show one author
     * @return \Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update a existing author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Delete a existing author
     * @return \Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }

}
