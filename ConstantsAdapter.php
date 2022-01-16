<?php
/*
* The MIT License (MIT)
*
* Product:      phpdotenv-constants-adapter
* Description:  A PHP define() & constant() adapter for vlucas/phpdotenv
*
* Copyright (c) Steven Agyekum <agyekum@posteo.de>
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software
* and associated documentation files (the "Software"), to deal in the Software without restriction,
* including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
* and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
* subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all copies
* or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
* TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL 
* THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
* TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
*/

namespace Dotenv\Environment\Adapter;

class ConstantsAdapter implements AdapterInterface
{
    /**
     * Determines if the adapter is supported.
     *
     * @return bool
     */
    public function isSupported()
    {
        return true;
    }
    /**
     * Get an environment variable, if it exists.
     *
     * @param string $name
     *
     * @return constant
     */
    public function get($name)
    {
        return constant($name);
    }
    /**
     * Set an environment variable.
     *
     * @param string      $name
     * @param string|null $value
     *
     * @return void
     */
    public function set($name, $value = null)
    {
        define($name, $value);
    }
    /**
     * Clear an environment variable.
     *
     * @param string $name
     *
     * @return void
     */
    public function clear($name)
    {
        runkit_constant_remove($name);
    }
}
