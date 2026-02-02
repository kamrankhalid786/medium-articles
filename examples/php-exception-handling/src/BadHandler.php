<?php
declare(strict_types=1);

namespace MediumArticles\ExceptionHandling;

class BadHandler
{
    /**
     * Process data but swallow all errors — anti-pattern used for demo.
     */
    public function process(array $data): bool
    {
        try {
            $this->doWork($data);
            return true;
        } catch (\Throwable $e) {
            // BAD: hides the real cause and returns a boolean
            return false;
        }
    }

    private function doWork(array $data): void
    {
        if (empty($data)) {
            throw new \InvalidArgumentException('data is required');
        }
        // simulate business rule
        if (isset($data['reject']) && $data['reject']) {
            throw new \DomainException('business rule failed');
        }
    }
}
