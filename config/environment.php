<?php

/*----------------------------------------------------*/
// Define your environments
/*----------------------------------------------------*/
return function() {
    // Check for the environment variable
    if (isset($_SERVER['APP_ENV']) && 'production' === $_SERVER['APP_ENV'])
    {
        // Return the environment file slug name: .env.{$slug}.php

        return 'production';
    }

    // Else if no environment variable found... it might be a production environment...
    return 'local';
};