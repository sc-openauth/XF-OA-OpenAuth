<?php

namespace OA\OpenAuth;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;

class Setup extends AbstractSetup
{
    use StepRunnerInstallTrait;
    use StepRunnerUpgradeTrait;
    use StepRunnerUninstallTrait;

    public function installStep1()
    {
        $this->db()->insert('xf_connected_account_provider', [
            'provider_id' =>  'openauth',
            'provider_class' => 'OA\OpenAuth:Provider\OpenAuth',
            'display_order' => 80,
            'options' => ''
        ]);
    }
    
    public function uninstallStep1()
    {
        $this->db()->delete('xf_connected_account_provider', 'provider_id = ?', ['openauth']);
    }
}
