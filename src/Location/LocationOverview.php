<?php
namespace Cyndaron\Geelhoed\Location;

use Cyndaron\View\Page;
use Cyndaron\Util\Setting;

final class LocationOverview extends Page
{
    private const PAGE_IMAGE = '/vendor/cyndaron/module-geelhoed/src/Location/images/location-overview.jpg';

    public function __construct()
    {
        parent::__construct('Leslocaties');
        $this->addCss('/vendor/cyndaron/module-geelhoed/src/geelhoed.css');
        $locations = Location::fetchAll([], [], 'ORDER BY city, street');
        $locNotification = Setting::get('geelhoed_locationNotification');
        $this->addTemplateVars(['locations' => $locations, 'pageImage' => self::PAGE_IMAGE, 'locNotification' => $locNotification]);
    }
}
