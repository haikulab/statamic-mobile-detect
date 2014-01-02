![Statamic CMS Logo](statamic-logo.png "Statamic CMS")

# Statamic Mobile Detect Plugin

This plugin could not exist without the amazing work of the [Mobile Detect project](https://github.com/serbanghita/Mobile-Detect)

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `mobile_detect` (Github timestamps the download folder).
3. Enjoy.

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

    2.7.2

## Roadmap

+ Adding more functionality that exists in the Mobile Detect library.

## Tested on

+ ![Statamic 1.6.1](http://b.repl.ca/v1/Statamic-1.6.1-green.png)
+ ![Statamic 1.6.2](http://b.repl.ca/v1/Statamic-1.6.2-green.png)
+ ![Statamic 1.6.3](http://b.repl.ca/v1/Statamic-1.6.3-green.png)
+ ![Statamic 1.6.4](http://b.repl.ca/v1/Statamic-1.6.4-green.png)
+ ![Statamic 1.6.5](http://b.repl.ca/v1/Statamic-1.6.5-green.png)
+ ![Statamic 1.6.6](http://b.repl.ca/v1/Statamic-1.6.6-green.png)
+ ![Statamic 1.6.7](http://b.repl.ca/v1/Statamic-1.6.7-green.png)

## Disclaimer

I've 'written' this plugin for my own use. It comes without any guarantee, so your mileage may vary in using it. If you find bugs or have great additions you'd like to share, use github to fork the project and share your improvements by initiating pull request

### MIT License

Copyright (c) 2013 Sergei Filippov

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
