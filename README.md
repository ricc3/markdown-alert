# Markdown Alert Plugin
This is a simple plugin for [Grav CMS](https://github.com/getgrav/grav) that adds a Markdown tag called Alert.


## Installation
* [Download plugin](https://github.com/ricc3/markdown-alert/releases)
* Unpack to: `/user/plugins` --> for you, it may be: `/your_site/grav/user/plugins`
* You should now see: `/your_site/grav/user/plugins/markdown-alert`
* Enjoy the working plug-in

## How it works
All you need to in your text editor do is add the tag `[alert]` before the paragraph(s) you are interested in and `[/alert]` at the end .

![](https://github.com/ricc3/markdown-alert/blob/main/screenshot/Screenshot_2025-10-27_02-07-12.png)
![](https://github.com/ricc3/markdown-alert/blob/main/screenshot/Screenshot_2025-10-27_02-07-38.png)
![](https://github.com/ricc3/markdown-alert/blob/main/screenshot/Screenshot_2025-10-27_02-09-16.png)

As you can see, the plugin definitely works with the default set of Grav tags.

## What you need to do
All you need to do is add styles for `<div class="alert">` in your `*.css` file. 

## Do you require a different container with a different class?
It's not difficult. All you need to do is change a few names here and there, and it works.
