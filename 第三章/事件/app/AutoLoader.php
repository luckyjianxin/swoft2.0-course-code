<?php declare(strict_types=1);

namespace App;

use App\Bean\Email;
use App\Bean\Sms;
use App\Bean\SunnySms;
use Swoft\SwoftComponent;

/**
 * Class AutoLoader
 *
 * @since 2.0
 */
class AutoLoader extends SwoftComponent
{
    /**
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * @return array
     */
    public function metadata(): array
    {
        return [];
    }

    public function beans(): array
    {
        return [
        ];
    }
}
