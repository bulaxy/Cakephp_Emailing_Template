<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\EmailForm;
use Cake\Mailer\Email;

class EmailingController extends AppController
{
    public function email()
    {
        $email = new EmailForm();
        $var1 = "Yo";
        $var2 = "I am Stupid";
        $var3 = "Hi Hi";
        $url = "http://ie.infotech.monash.edu/foundation-system-build/app/";
        if ($this->request->is('post')) {
            $request = $this->request->getData();
            $callback = new Email();
            $callback
                //Template, comment out if not using it
                ->setTemplate('random')
                ->setViewVars(['var1' => $var1, 'var2' => $var2, 'var3' => $var3, 'url' => $url])
                ->setEmailFormat('html')
                ->setTo($request['email'])
                ->setSubject('Test')
                //If you want to send with template use this
                ->send();
            //If you want to send without template, just pure text, use this
            //->send($var1);
        }
        $this->set(compact( 'email'));
    }
}
