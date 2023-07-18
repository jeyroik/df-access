<?php
namespace deflou\components\access;

enum ESection: string
{
    case Data = 'data';
    case API = 'api';
    case UI = 'ui';
}
