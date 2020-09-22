<?php namespace Kyle\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ContactForm Component',
            'description' => 'Contact Me Email'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend(){
        $validator = Validator::make([
                'name' => Input::get('txtName'), 
                'email' => Input::get('txtEmail'),
                'content' => Input::get('txtMsg')
            ],
            [
                'name' => 'required',
                'email' => 'required|email',
                'content' => 'required'
            ]
        );

        if($validator->fails()){
            return redirect('/contact')->withErrors($validator);
        }
        else{
            $vars = ['name' => Input::get('txtName'), 'email' => Input::get('txtEmail'), 'content' => Input::get('txtMsg')];

            Mail::send('kyle.contact::mail.message', $vars, function($message) {

                $message->to('kylejoseph.dev@gmail.com', 'Site Developer');
                $message->subject('Contact Me');
            });
            return redirect('/contact');

        }
        
    }
}
