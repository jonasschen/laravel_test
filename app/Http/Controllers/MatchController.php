<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MatchCreateRequest;
use App\Http\Requests\MatchUpdateRequest;
use App\Entities\Player;
use App\Repositories\MatchRepository;
use App\Repositories\MatchPlayerRepository;

class MatchController extends Controller
{
    /**
     * @var MatchRepository
     */
    protected $matchRepository;

    /**
     * @var MatchPlayerRepository
     */
    protected $matchPlayerRepository;

    /**
     * MatchController constructor.
     *
     * @param MatchRepository $matchRepository
     */
    public function __construct(MatchRepository $matchRepository, MatchPlayerRepository $matchPlayerRepository)
    {
        $this->matchRepository = $matchRepository;
        $this->matchPlayerRepository = $matchPlayerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->matchRepository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $matches = $this->matchRepository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $matches,
            ]);
        }

        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::orderBy('name')->get();

        return view('matches.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatchCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = $this->matchRepository->find($id);
        $players = Player::orderBy('name')->get();

        return view('matches.edit', compact('match', 'players'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatchUpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function start($id)
    {
        //
    }
}
