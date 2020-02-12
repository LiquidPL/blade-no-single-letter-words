<?php

namespace LiquidPL\BladeNoSingleLetter;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeNoSingleLetterProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('nosingleletter', function () {
            return '<?php ob_start() ?>';
        });

        Blade::directive('endnosingleletter', function () {
            return "<?php echo preg_replace('/(\s\S{1,2})\s(?![^<]*>)/m', '$1&nbsp;', ob_get_clean()) ?>";
        });
    }
}
