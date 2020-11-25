<?php
namespace Cyndaron\Geelhoed\Contest;

use Cyndaron\Page;

final class SubscriptionListPage extends Page
{
    public function __construct(Contest $contest)
    {
        parent::__construct('Overzicht inschrijvingen ' . $contest->name);
        $this->addScript('/vendor/cyndaron/module-geelhoed/src/Contest/js/SubscriptionListPage.js');
        $this->addTemplateVars(['contest' => $contest]);
    }
}
