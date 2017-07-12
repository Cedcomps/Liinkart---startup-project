<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Achievements\UserChangedAvatar;
use App\Achievements\UserCompletedProfile;
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
        $posts = $user->posts()->get();
        $achievements = $user->achievements;

        return view('show', compact('user', 'posts', 'achievements'));
    }
 
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }
 
    public function update(UserUpdateRequest $request, User $user)
            //dd($user->avatar);
    {
 
        if($request->hasFile('avatar')) 
        {
            if ($user->avatar != 'default.jpg') 
            {  
               \File::delete(public_path( '/storage/uploads/avatars/' ). $user->avatar);
            }
        }

        $this->userRepository->update($user, $request->all());

        if($request->hasFile('avatar')) 
        {
            $destinationPath = public_path('storage/uploads/avatars/');
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $img = Image::make($avatar)->fit(150, 150);
            //Must separate fit and save method, both don't work on same line
            $avatar->move($destinationPath, $filename);
            //idem
            $img->save($destinationPath.'/'.$filename);
            
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
            $user->unlock(new UserChangedAvatar());
        }
        
        $user->unlock(new UserCompletedProfile());

        return redirect()->route('user.show', ['id' => $user->id])->withOk("Le profil " . $request->name . " a été mis à jour.");
    }
 
    public function destroy(User $user)
    {
        $this->userRepository->destroy($user);
 
        return back();
    }
}