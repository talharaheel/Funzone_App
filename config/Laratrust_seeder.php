<?php

return[
    'role_structure' =>[
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'user' => [
            'profile' => 'r,u'
        ],

    ],
    'permissionstructure' => [
        'cru_user' => [
        
        'profile' => 'c,r,u'
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'd' => 'delete',
        'u' => 'update'
        
    
    ]

];