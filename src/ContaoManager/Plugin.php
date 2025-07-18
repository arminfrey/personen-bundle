<?php

namespace Arminfrey\ContaoPersonenBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Arminfrey\ContaoPersonenBundle\ContaoPersonenBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoPersonenBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
