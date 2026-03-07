namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(Request $request) {
        $users = User::query();

     
        if($request->name) {
            $users->where('name', 'like', "%{$request->name}%");
        }
        if($request->email) {
            $users->where('email', 'like', "%{$request->email}%");
        }

        $users = $users->get();
        return view('users.index', compact('users'));
    }

    
    public function edit(User $user = null) {
        $user = $user ?? new User();
        return view('users.edit', compact('user'));
    }

 
    public function save(Request $request, User $user = null) {
        $user = $user ?? new User();
        $data = $request->only('name','email');
        if($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->fill($data);
        $user->save();

        return redirect()->route('users_list');
    }


    public function delete(User $user) {
        $user->delete();
        return redirect()->route('users_list');
    }
}