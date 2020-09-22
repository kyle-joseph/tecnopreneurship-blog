<?php namespace Kyle\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Kyle\Contact\Components\ContactForm' => 'contactForm'
        ];
    }

    public function registerSettings()
    {
    }
}
