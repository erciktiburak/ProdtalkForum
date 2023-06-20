<?php

namespace App\View\Components\Home;

use App\Models\Tag;
use App\Models\UserRole;
use Illuminate\View\Component;

class Tags extends Component
{

    public $tags;
    public $tag = null;
      

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tag = null)
    {
        $this->tag = $tag;

        $userHasRole = UserRole::where('user_id', auth()->id())
            ->where('role_id', 1) // İstenen role id'si
            ->exists();
    
        if ($userHasRole) {
            // Kullanıcının belirtilen rolü varsa, tüm tagları al
            $this->tags = Tag::all();
        } else {
            // Diğer kullanıcılar için Tag id'si 11 olanı hariç al
            $this->tags = Tag::where('id', '<>', 11)->get();
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.tags');
    }
}
