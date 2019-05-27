# Cakephp-Simple-Email-Template
Cakephp Simple Email Template

Steps

1. Install composer install

2. config/app.php to the following

```
'EmailTransport' => [
        'default' => [
            'className' => 'Smtp',
            // The following keys are used in SMTP transports
            'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'timeout' => 30,
            'username' => 'demo998877665544332211@gmail.com',
            'password' => 'MMNNmmnn99889988',
        ],
    ],
```

3. go into to the localhost
