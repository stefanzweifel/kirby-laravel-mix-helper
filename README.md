# kirby-laravel-mix-helper

Kirby Plugin to use [laravel-mix](https://github.com/JeffreyWay/laravel-mix)'s Versioning / Cache Busting.

## Installation

Place `kirby-laravel-mix-helper.php` into `/site/plugins/kirby-laravel-mix-helper` folder.

### Advanced: Composer

You can also install this plugin through composer. Execute the following command in the root of your kirby plugin.
Composer will place the files automatically in the plugins directory.

```
composer require wnx/kirby-laravel-mix-helper
```

#### Change Installation Path

If you have a custom folder structure in your kirby project, you can also adjust the installation path within your `composer.json`. Add the following setting:

```json
"extra": {
    "installer-paths": {
        "dist/site/plugins/kirby-laravel-mix-helper": ["wnx/kirby-laravel-mix-helper"]
    }
}
```

### Advanced: Git Submodules

```bash
git submodule add https://github.com/stefanzweifel/kirby-laravel-mix-helper.git site/plugins/kirby-laravel-mix-helper
```

## Usage

After installing the plugin the `mix()` helper is available to you. In your template you can then use it in your `link`- and `script`-tags like this:

```html
<link rel="stylesheet" href="<?php echo mix('/assets/css/main.css') ?>">
```

The `mix` helper will read your `mix-manifest.json` file and append the cache busting ID to the asset path.
The rendered HTML will look like this:

```html
<link rel="stylesheet" href="/assets/css/main.css?id=0ae511c15cfbd440f579">
```

## Configuration

The plugin comes with one configuration option: `mix.manifest`.
Add it to your `config.php` file if your `mix-manifest.json` file is stored at a custom path.

```php
c::set('mix.manifest', 'assets/mix-manifest.json');
```

## License

MIT
