<?php

return [
    'subject' => [
        'prefix' => 'New Message From Rasoulispine.com'
    ],
    'emails' => [
        'to'   => 'kaz@starmenusa.com',
        'from' => 'dev@starmenusa.com'
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Your message has been sent successfully.',
        'validation' => [
            'emptyname'    => 'Name is required.',
            'emptyemail'   => 'Email is invalid.',
            'emptysubject' => 'Subject is required.',
            'emptymessage' => 'Message is required.'
        ]
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'    => 'Phone',
        'subject'  => 'Phone',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];