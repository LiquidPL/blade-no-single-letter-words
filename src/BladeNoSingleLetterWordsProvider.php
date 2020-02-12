<?php

namespace LiquidPL\BladeNoSingleLetterWords;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeNoSingleLetterWordsProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('nosingleletterwords', function () {
            return '<?php ob_start() ?>';
        });

        Blade::directive('endnosingleletterwords', function () {
            return "<?php echo preg_replace('/(\s\S{1,2})\s(?![^<]*>)/m', '$1&nbsp;', ob_get_clean()) ?>";
        });
    }
}
