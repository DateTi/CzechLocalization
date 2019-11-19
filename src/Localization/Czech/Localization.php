<?php
declare(strict_types=1);

namespace DateTi\Localization\Czech;

use DateTi\Localization\AbstractLocalization;
use Nette\Neon\Neon;

class Localization extends AbstractLocalization
{
    /** @var array */
    protected $config;

    /**
     * @return array
     * @throws \RuntimeException
     */
    protected function getConfig(): array
    {
        if (!$this->config) {
            $file = __DIR__ . '/cs.neon';
            $content = file_get_contents($file);

            if ($content === false) {
                throw new \RuntimeException('Unavailable get content from file ' . $file);
            }

            $this->config = Neon::decode($content, Neon::BLOCK);
        }

        return $this->config;
    }
}
