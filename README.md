# dotenv-loader

The dotenv-loader is a simple PHP helper that automatically load in a `.env` file 
from the root of your project into environment variables.

## Quick Start

Simple run `composer require DivineOmega/dotenv-loader` to install. 

You'll then be able to create a `.env` file in your project's root directory 
(in the same location as your `composer.json` file). Any variables in the 
`.env` file can then be accessed in any way you wish, such as using PHP's built-in 
`getenv` function.

For an actual example of how to use `dotenv-loader`, see the [`test` directory](test/).