<?php
namespace deflou\components\access;

enum EObject: string
{
    case Public = 'public';
    case Authorized = 'authorized';
    case Admin = 'admin';
}
