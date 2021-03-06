<?php
declare(strict_types=1);

namespace Cyndaron\Geelhoed\Contest;

use Cyndaron\View\Page;
use Cyndaron\User\User;

final class ParentAccountsPage extends Page
{
    public function __construct()
    {
        parent::__construct('Lijst ouderaccounts');

        $users = User::fetchAll(['id IN (SELECT `userId` FROM `user_rights` WHERE `right` = ?)'], [Contest::RIGHT_PARENT]);
        $this->addScript('/vendor/cyndaron/module-geelhoed/src/Contest/js/ParentAccountsManager.js');
        $this->addTemplateVars([
            'users' => $users,
        ]);
    }
}
