<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Traits\WithBlacklist;
use App\Services\Languages\GetActiveLanguages;

class StaffComposer
{
    use WithBlacklist;
    

    /**
     * list of paths that are blacklisted
     *
     * @var array
     */
    protected $blacklist = [
        'staff.login',
        'staff.partials.*',
        'staff.*.partials.*'
    ];

    public function __construct()
    {
      
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $allow = $this->check($view->getName());
        $staff = auth('users')->user();
        
        if ($allow) {
            $view->with([
                'staff' => $staff,
                'permissions' => $staff->getAllPermissions()->pluck('name'),
                'main' => [
                  
                ]
            ]);
        }
    }
}
