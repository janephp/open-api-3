<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi3\JsonSchema\Model;

class Discriminator
{
    /**
     * @var string|null
     */
    protected $propertyName;
    /**
     * @var string[]|null
     */
    protected $mapping;

    /**
     * @return string|null
     */
    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }

    /**
     * @param string|null $propertyName
     *
     * @return self
     */
    public function setPropertyName(?string $propertyName): self
    {
        $this->propertyName = $propertyName;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMapping(): ?\ArrayObject
    {
        return $this->mapping;
    }

    /**
     * @param string[]|null $mapping
     *
     * @return self
     */
    public function setMapping(?\ArrayObject $mapping): self
    {
        $this->mapping = $mapping;

        return $this;
    }
}
