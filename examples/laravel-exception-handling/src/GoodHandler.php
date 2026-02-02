<?php
declare(strict_types=1);

namespace MediumArticles\ExceptionHandling;

class GoodHandler
{
    /**
     * Validate early and let exceptions bubble where appropriate.
     * Only catch when you can recover.
     */
    public function process(array $data): bool
    {
        $this->validate($data);
        $this->doWork($data);
        return true;
    }

    private function validate(array $data): void
    {
        if (empty($data)) {
            throw new \InvalidArgumentException('data is required');
        }
    }

    private function doWork(array $data): void
    {
        if (isset($data['reject']) && $data['reject']) {
            throw new \DomainException('business rule failed');
        }
    }
}
