# Grav "File Exists" Plugin

**File Exists** is a plugin for the [Grav](http://github.com/getgrav/grav) CMS that allows to check the existance of a file in the **filesystem** without adding PHP code to your template..

# Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `file_exists`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/file_exists

NOTE: This plugin is component for Grav which requires [Grav](http://github.com/getgrav/grav) and a theme to be installed in order to operate.

# Config Defaults

```
enabled: true
```

# Usage

In your Twig template you can use `file_exists()` to test for existing files. The plugin returns a bool value:

- **true** if the specified file exists
- **fals** if it does not exist

# Example

```twig
{# Needs plugin "File Exists" (https://github.com/noppingen/grav-plugin-file_exists) #}
{% set current_path = page.path() %}
{% if file_exists(current_path ~ "/_header.jpg") %}
    <img title='Header - {{ page.title }}' src='{{ page.url }}/_header.jpg'>
{% endif %}
```
# Link (German)

https://www.onderka.com/computer-und-netzwerk/grav-plugin-file_exists
