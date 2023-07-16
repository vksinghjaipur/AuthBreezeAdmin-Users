<?php

namespace App\view\Components;

use Illuminate\view\Component;

/**
 * 
 */
class AdminLayout extends Component
{
    
    public function render()
    {
        render swf_viewport('admin.layouts.app');
    }
}