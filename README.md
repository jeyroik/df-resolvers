# df-resolvers

Resolvers for DF

# Usage

```php
//catch event request and determine instance.
/**
 * @var IInstance $caller
 */
$eventResolverClass = $caller->getResolver();
$eventResolver      = new $resolverClass();
$eventResolved      = $eventResolver->resolveEvent();

// determine triggers by $eventResolved
/**
 * @var ITrigger[] $triggers
 */
foreach ($triggers as $trigger) {
    $operationResolverClass = $trigger->getInstance(ETrigger::Operation)->getResolver();
    $operationResolver      = new $operationResolverClass();
    $operationResolved      = $operationResolver->resolveOperation($eventResolved, $trigger);
    $operationResolved->run();
}
```