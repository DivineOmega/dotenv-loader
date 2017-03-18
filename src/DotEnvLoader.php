<?php

if (function_exists('dotEnvLoader')) {

    throw new Exception('dotEnvLoader function variable already exists. Ensure you do not have two copies of the dotenv-loader package.');

} else {

    function dotEnvLoader() {

        $path = realpath(__DIR__.'/../../../../');

        $dotEnv = new Dotenv\Dotenv($path);

        $dotEnv->load();
    }

    dotEnvLoader();

}
