<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{

    
    public string $color;
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $href)
    {
        $this->color = 'secondary';
        $this->text = $type;
      
        //
        if($type == "create"){
            $this->color = "primary";
            $this->text = __("keywords.add_new");
        }
       elseif($type == "edit"){
            $this->color = "success";
            $this->text = __("keywords.edit");
        }
        elseif($type == "view"){
            $this->color = "info";
            $this->text = __("keywords.view");
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
