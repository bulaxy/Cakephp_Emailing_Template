# Cakephp-Simple-Email-Template
Cakephp Simple Email Template

**Steps

1. Install composer install

2. config/app.php to the following (password field PMed) 

```
'EmailTransport' => [
        'default' => [
            'className' => 'Smtp',
            // The following keys are used in SMTP transports
            'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'timeout' => 30,
            'username' => 'demo998877665544332211@gmail.com',
            'password' => '',
        ],
    ],
```

3. go into to the localhost, home page should be have an email address for you to enter, and enter your own email address, it should send you an email soon

**How it works and what did I changed 

1. Modelless Form
When trying to get data from view without amodel, you will need a modelless form, in this case, emaill address will be passed through

In your project, you will need to create file call "Form" folder in `src`  and make a form inside like mine 
(aka create a php code in `/src/Form/EmailForm.php`

2. Controller
You do not need to create a sperate controller like me, but since I dont have any database/page to fall back on, I need a place to fallback on.

You can compy my Email function, and include this in the top 
```
use App\Form\EmailForm;
use Cake\Mailer\Email;
```

Just have a look at the code, pretty easy to understand already


3. Templating, you most likely going to use some ctp templating, you can find it in `/src/Template/Email/html`. The `random.ctp`. Just like any ctp file. 

