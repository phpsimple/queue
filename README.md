<p align="center">
  <a href="https://github.com/phpsimple"><img src="https://avatars.githubusercontent.com/u/120518417?s=84&v=4"></a><br>
</p>

<h1 align="center">Queue</h1>

<p align="center">Very simple FIFO queue implementation</p>

[![Test Coverage](https://api.codeclimate.com/v1/badges/9487615798456eafda6c/test_coverage)](https://codeclimate.com/github/phpsimple/queue/test_coverage)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpsimple/queue/badges/quality-score.png?b=simple)](https://scrutinizer-ci.com/g/phpsimple/queue/?branch=simple)
[![Build Status](https://scrutinizer-ci.com/g/phpsimple/queue/badges/build.png?b=simple)](https://scrutinizer-ci.com/g/phpsimple/queue/build-status/simple)

---

Installation
---
The recommended way to install is via Composer:

```shell
composer require phpsimple/queue
```

Usage
---
```php
use PhpSimple\Queue;

$queue = new Queue();

for ($i = 0; $i < 10; $i++) {
    $queue->push($i);
}

while ($item = $queue->pop()) {
    var_dump($item);
}
```
---
[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine)
