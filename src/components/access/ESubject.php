<?php
namespace deflou\components\access;

enum ESubject: string
{
    case Trigger = 'trigger';
    case Application = 'app';
    case Instance = 'instance';
    case Player = 'player';
}
