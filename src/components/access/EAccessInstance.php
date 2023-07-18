<?php
namespace deflou\components\access;

enum EAccessInstance: string
{
    case Install = 'install';
    case View = 'view';
    case Suspend = 'suspend';
    case Event = 'event';
    case Operation = 'operation';
    case Delete = 'delete';
    case Share = 'share';
    case Info = 'info';
}
