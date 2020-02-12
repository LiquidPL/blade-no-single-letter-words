# blade-no-single-letter-words

A common typography practice in countries such as Poland is to push 1-2 character words that are situated at the end of the line to the next one.

This package adds `@nosingleletterwords` and `@endnosingleletterwords` to Blade. Adding them to your template alters the text inside them so that `&nbsp;` is appended after said 1-2 character words, so that they'll be always pushed to the next line if they happen to be at the end of a line.

## Supported Laravel versions

This package officially supports the currently supported Laravel version, which at the time of this commit are **5.8 and above**. However, it should work on the previous versions too.

# Installation

```
# composer require liquidpl/blade-no-single-letter-words
```

On **Laravel 5.4** and below, you need to add the service provider to your configuration files. In your `config/app.php` file, in the `providers` array key:

```php
    'providers' => array( // or [
        // ...

        'LiquidPL\BladeNoSingleLetterWords\BladeNoSingleLetterWordsProvider',
    );
```

## Usage

```html
@nosingleletterwords
<p>
    Some text that might look a bit bad from a typographical standpoint.
<p>
@endnosingleletterwords
```

Results in:

```html
<p>
    Some text that might look a&nbsp;bit bad from a&nbsp;typographical standpoint.
</p>
```
