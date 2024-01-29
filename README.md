# rector-8435

## Installation

```shell
composer install
```

## Reproduction

1. Check out that phpstan works as expected:

    ```shell
    composer ci:phpstan
    ```
    
    It should provide no errors.

2. Verify that phpunit works as expected as well:

    ```shell
    composer ci:test
    ```

    It should print OK (1 test, 1 assertion)

3. Run rector

    ```shell
   composer ci:rector
    ```
   
    In current repository state it provides no diff, since no issues are present.

    You may trigger an issue by removing type from `Foo::$i` property:
        
    ```diff
    final class Foo
    {
    -    private int $i;
    +    private $i;

        public function __construct(int $i)
    ```

    As a result, rector returns exit code 2, but prints no diff.
