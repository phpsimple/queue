<?php declare(strict_types = 1);

namespace PhpSimple;

use Countable;

use function array_shift;
use function count;
use function current;
use function in_array;

/**
 * @template Q
 */
final class Queue implements Countable
{
    public function __construct(/** @var array<Q> */ private array $items = [])
    {
    }

    public function clear(): void
    {
        $this->items = [];
    }

    public function contains(mixed $item): bool
    {
        return in_array(needle: $item, haystack: $this->items, strict: true);
    }

    public function pop(): mixed
    {
        if ($this->isEmpty()) {
            return false;
        }

        return array_shift(array: $this->items);
    }

    public function push(mixed $item): void
    {
        if (null !== $item) {
            $this->items[] = $item;
        }
    }

    public function peek(): mixed
    {
        return current(array: $this->items);
    }

    public function isEmpty(): bool
    {
        return [] === $this->items;
    }

    public function count(): int
    {
        return count(value: $this->items);
    }
}
