<?php
namespace deflou\components\access;

enum EAccessApplication: string
{
    case Install = 'install';
    case View = 'view';
    case Suspend = 'suspend';
    case Instance = 'instance';
    case Delete = 'delete';
    case Share = 'share';
    case Info = 'info';
}
