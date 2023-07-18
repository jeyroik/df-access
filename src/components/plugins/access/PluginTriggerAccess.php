<?php
namespace deflou\components\plugins\access;

use deflou\components\access\EAccessTrigger;
use deflou\components\access\ESection;
use deflou\components\access\ESubject;
use deflou\interfaces\triggers\ITrigger;
use extas\components\access\Access;
use extas\components\access\AccessService;
use extas\components\plugins\Plugin;
use extas\interfaces\IItem;
use extas\interfaces\repositories\IRepository;
use extas\interfaces\stages\IStageCreateAfter;

class PluginTriggerAccess extends Plugin implements IStageCreateAfter
{
    /**
     * Grant vendor access for trigger
     *
     * @param IItem|ITrigger $createdItem
     * @param IItem $sourceItem
     * @param IRepository|null $repository
     * @return void
     */
    public function __invoke(IItem &$createdItem, IItem $sourceItem, ?IRepository $repository = null): void
    {
        $vendorName = $createdItem->buildVendor()->getName();
        $accessService = new AccessService();
        foreach (EAccessTrigger::cases() as $right) {
            $accessService->grant(new Access([
                Access::FIELD__OBJECT => $vendorName,
                Access::FIELD__SECTION => ESection::Data->value,
                Access::FIELD__SUBJECT => ESubject::Trigger->value,
                Access::FIELD__OPERATION => $right->value
            ]));
        }
    }
}
