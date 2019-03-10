<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsTeamProfileField;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
        $data = clone $data;
        if (property_exists($data, 'field_name')) {
            $object->setFieldName($data->{'field_name'});
            unset($data->{'field_name'});
        }
        if (property_exists($data, 'hint')) {
            $object->setHint($data->{'hint'});
            unset($data->{'hint'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'is_hidden')) {
            $object->setIsHidden($data->{'is_hidden'});
            unset($data->{'is_hidden'});
        }
        if (property_exists($data, 'label')) {
            $object->setLabel($data->{'label'});
            unset($data->{'label'});
        }
        if (property_exists($data, 'options')) {
            $values = [];
            foreach ($data->{'options'} as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
            unset($data->{'options'});
        }
        if (property_exists($data, 'ordering')) {
            $object->setOrdering($data->{'ordering'});
            unset($data->{'ordering'});
        }
        if (property_exists($data, 'possible_values')) {
            $values_1 = [];
            foreach ($data->{'possible_values'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPossibleValues($values_1);
            unset($data->{'possible_values'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFieldName()) {
            $data->{'field_name'} = $object->getFieldName();
        }
        if (null !== $object->getHint()) {
            $data->{'hint'} = $object->getHint();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsHidden()) {
            $data->{'is_hidden'} = $object->getIsHidden();
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data->{'options'} = $values;
        }
        if (null !== $object->getOrdering()) {
            $data->{'ordering'} = $object->getOrdering();
        }
        if (null !== $object->getPossibleValues()) {
            $values_1 = [];
            foreach ($object->getPossibleValues() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'possible_values'} = $values_1;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_2;
            }
        }

        return $data;
    }
}