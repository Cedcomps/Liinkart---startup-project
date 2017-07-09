<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\User;
use Image;
use Auth;
 
class UserController extends Controller
{
    protected $userRepository;
    
    protected $nbrPerPage = 4;
 
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
 
    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
 
        return view('index', compact('users'));
    }
 
    public function create()
    {
        return view('create');
    }
 
    public function store(UserCreateRequest $request)
    {
        $user = $this->userRepository->store($request->all());
 
        return redirect()->route('user.index')->withOk("L'utilisateur " . $user->name . " a été créé.");
    }
 
    public function show(User $user)
    {
        return view('show', compact('user'));
    }
 
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }
 
    public function update(UserUpdateRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->all());

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $destinationPath = public_path('storage/uploads/avatars/');
            Image::make($avatar->getRealPath())->fit(150, 150)->save($destinationPath.'/'.$filename);
            $avatar->move($destinationPath, $filename);
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        
        return redirect()->route('user.show', ['id' => $user->id])->withOk("Le profil " . $request->name . " a été mis à jour.");
    }
 
    public function destroy(User $user)
    {
        $this->userRepository->destroy($user);
 
        return back();
    }
}