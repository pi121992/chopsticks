<?php

namespace App\View\Components;

use Illuminate\View\Component;

class chopstickItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title,$imgsrc,$link;
    public function __construct($title="title",$imgsrc="",$link="")
    {
        $this->title=$title;
        $this->imgsrc=$imgsrc;
        $this->link=$link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.chopstickItem');
    }
}
