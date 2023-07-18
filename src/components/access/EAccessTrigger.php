<?php
namespace deflou\components\access;

enum EAccessTrigger: string
{
    case Create = 'create';
    case View = 'view';
    case Suspend = 'suspend';
    case Delete = 'delete';
    case Launch = 'launch';
    case Share = 'share';
}
