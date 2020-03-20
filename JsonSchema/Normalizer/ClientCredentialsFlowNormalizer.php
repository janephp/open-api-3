<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi3\JsonSchema\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ClientCredentialsFlowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\JsonSchema\\Model\\ClientCredentialsFlow';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi3\JsonSchema\Model\ClientCredentialsFlow;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi3\JsonSchema\Model\ClientCredentialsFlow();
        if (\array_key_exists('tokenUrl', $data) && $data['tokenUrl'] !== null) {
            $object->setTokenUrl($data['tokenUrl']);
            unset($data['tokenUrl']);
        } elseif (\array_key_exists('tokenUrl', $data) && $data['tokenUrl'] === null) {
            $object->setTokenUrl(null);
        }
        if (\array_key_exists('refreshUrl', $data) && $data['refreshUrl'] !== null) {
            $object->setRefreshUrl($data['refreshUrl']);
            unset($data['refreshUrl']);
        } elseif (\array_key_exists('refreshUrl', $data) && $data['refreshUrl'] === null) {
            $object->setRefreshUrl(null);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['scopes'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setScopes($values);
            unset($data['scopes']);
        } elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTokenUrl()) {
            $data['tokenUrl'] = $object->getTokenUrl();
        } else {
            $data['tokenUrl'] = null;
        }
        if (null !== $object->getRefreshUrl()) {
            $data['refreshUrl'] = $object->getRefreshUrl();
        } else {
            $data['refreshUrl'] = null;
        }
        if (null !== $object->getScopes()) {
            $values = [];
            foreach ($object->getScopes() as $key => $value) {
                $values[$key] = $value;
            }
            $data['scopes'] = $values;
        } else {
            $data['scopes'] = null;
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }

        return $data;
    }
}
