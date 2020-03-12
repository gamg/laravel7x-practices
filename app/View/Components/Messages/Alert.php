<?php

namespace App\View\Components\Messages;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $text)
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function languages($language)
    {
        return [
            'C++',
            'PHP',
            'Python',
            $language
        ];
    }

    public function framework()
    {
        return 'Laravel PHP';
    }
}
