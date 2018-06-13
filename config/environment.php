<?php
/*----------------------------------------------------*/
// Define your environments
/*----------------------------------------------------*/
return function() {
    // Check for the environment variable


    if ('local' === $_SERVER['APP_ENV'])
    {
        // Return the environment file slug name: .env.{$slug}.php
        return 'local';
    }

    // Else if no environment variable found... it might be a production environment...
    return 'production';
};