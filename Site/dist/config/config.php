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
            'emptynameLast'    => 'Name is required.',
            'emptydate'    => 'Name is required.',
            'emptyemail'   => 'Email is invalid.',
            'emptysubject' => 'Subject is required.',
            'emptymessage' => 'Message is required.'
        ]
    ],
    'fields' => [
        'name'     => 'First Name',
        'nameLast'     => 'Last Name',
        'email'    => 'Email',
        'date'    => 'Date',
        'phone'    => 'Phone',
        'subject'  => 'Phone',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];