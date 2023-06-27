<?php
namespace deflou\interfaces\resolvers;

use deflou\interfaces\resolvers\events\IResolvedEvent;
use deflou\interfaces\resolvers\operations\IResolvedOperation;
use deflou\interfaces\triggers\ITrigger;
use extas\interfaces\IItem;

interface IResolver extends IItem
{
    public const SUBJECT = 'df.resolver';

    public function resolveEvent(): IResolvedEvent;
    public function resolveOperation(IResolvedEvent $event, ITrigger $trigger): IResolvedOperation;
}
