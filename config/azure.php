<?php

// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

// Access environment through the config helper
// This will avoid issues when using Laravel's config caching
// https://laravel.com/docs/8.x/configuration#configuration-caching
return [
    'appId' => '9c7bde39-0b2d-48bd-96af-3d9bbbf32a83',
    'appSecret' => 'yW0LGcN3n85Tr22vsaqH-pp-0~O71Rxwq.',
    'redirectUri' => 'http://localhost:8000/sign-in/redirect',
    'scopes' => 'openid profile offline_access user.read Mail.Read Mail.ReadBasic Mail.ReadWrite mailboxsettings.read calendars.readwrite',
    'authority' => 'https://login.microsoftonline.com/88b327fb-b21c-4266-9a6c-c37db67c518e',
    'authorizeEndpoint' => '/oauth2/v2.0/authorize',
    'tokenEndpoint' => '/oauth2/v2.0/token',
];
