![Statamic CMS Logo](statamic-logo.png "Statamic CMS")

# Statamic Mobile Detect Plugin

This plugin could not exist without the amazing work of the [Mobile Detect project](https://github.com/serbanghita/Mobile-Detect) ![Mobile Detect 2.8.0](http://b.repl.ca/v1/Mobile_Detect-2.8.0-green.png)

## Installing via git

1. Clone the repo via git into `/_add-ons/`.

        cd _add-ons/
        git clone git@github.com:haikulab/statamic-mobile-detect.git mobile_detect

2. Pull in the `Mobile Detect` repository using `git submodules`

        cd mobile_detect/
        git submodule init
        git submodule update

You should see something like this:

        → git submodule init
        Submodule 'Mobile-Detect' (git://github.com/serbanghita/Mobile-Detect.git) registered for path 'Mobile-Detect'

        → git submodule update
        Cloning into 'Mobile-Detect'...
        remote: Reusing existing pack: 1512, done.
        remote: Total 1512 (delta 0), reused 0 (delta 0)
        Receiving objects: 100% (1512/1512), 1.94 MiB | 596.00 KiB/s, done.
        Resolving deltas: 100% (825/825), done.
        Submodule path 'Mobile-Detect': checked out 'd6943b36f45a9ee654e87cd98832890797a228fb'

3. Ensure the plugin-in folder name is `mobile_detect` (and not statamic-mobile-detect).

        mv statamic-mobile-detect mobile_detect

4. Clear the Statamic cache - [How to clear the cache](http://statamic.com/learn/advanced-features/caching)
5. Use the tags listed in **Usage**.

## Usage

### Core Tag

    {{ mobile_detect }}

### Example Output for `{{ mobile_detect }}`

+ `computer`
+ `tablet`
+ `phone`

### Get `Mobile Detect` library version number

    {{ mobile_detect:library_version }}

### Example Output for `{{ mobile_detect:library_version }}`

    2.8.0

## Using as part of logic

Using `{{ mobile_detect }}` as part of an `{{ if }}` statement:

    {{if something == { mobile_detect } }}
        ...
        {# some content #}
        ...
    {{ endif }}


## Tested on

+ ![Statamic 1.7](http://b.repl.ca/v1/Statamic-1.7-green.png)
+ ![Statamic 1.7.1](http://b.repl.ca/v1/Statamic-1.7.1-green.png)
+ ![Statamic 1.7.2](http://b.repl.ca/v1/Statamic-1.7.2-green.png)
+ ![Statamic 1.7.3](http://b.repl.ca/v1/Statamic-1.7.3-green.png)
+ ![Statamic 1.7.4](http://b.repl.ca/v1/Statamic-1.7.4-green.png)
+ ![Statamic 1.7.5](http://b.repl.ca/v1/Statamic-1.7.5-green.png)
+ ![Statamic 1.7.6](http://b.repl.ca/v1/Statamic-1.7.6-green.png)
+ ![Statamic 1.7.7](http://b.repl.ca/v1/Statamic-1.7.7-green.png)
+ ![Statamic 1.7.8](http://b.repl.ca/v1/Statamic-1.7.8-green.png)
+ ![Statamic 1.7.9](http://b.repl.ca/v1/Statamic-1.7.9-green.png)

## Support for Statamic 1.6.7 and prior

Support for all version of Statamic prior to 1.7 have been deprecated and moved into a separate branch (**pre-1.7**).

## Disclaimer

I've 'written' this plugin for my own use. It comes without any guarantee, so your mileage may vary in using it. If you find bugs or have great additions you'd like to share, use github to fork the project and share your improvements by initiating pull request

### MIT License

Copyright (c) 2013 Sergei Filippov

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
