<?php

echo '***!';

if (function_exists('dotEnvLoader')) {
    throw new Exception('dotEnvLoaderFunction variable already exists. Ensure you do not have two copies of the dotenv-loader package.');
}

function dotEnvLoader() {

    $path = realpath(__DIR__.'/../../../../');

    $dotEnv = new Dotenv\Dotenv($path);

    $dotEnv->load();
}

dotEnvLoader();
