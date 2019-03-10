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

class ObjsFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsFile';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsFile;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsFile();
        $data = clone $data;
        if (property_exists($data, 'channels')) {
            $values = [];
            foreach ($data->{'channels'} as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
            unset($data->{'channels'});
        }
        if (property_exists($data, 'comments_count')) {
            $object->setCommentsCount($data->{'comments_count'});
            unset($data->{'comments_count'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
            unset($data->{'created'});
        }
        if (property_exists($data, 'display_as_bot')) {
            $object->setDisplayAsBot($data->{'display_as_bot'});
            unset($data->{'display_as_bot'});
        }
        if (property_exists($data, 'editable')) {
            $object->setEditable($data->{'editable'});
            unset($data->{'editable'});
        }
        if (property_exists($data, 'external_type')) {
            $object->setExternalType($data->{'external_type'});
            unset($data->{'external_type'});
        }
        if (property_exists($data, 'filetype')) {
            $object->setFiletype($data->{'filetype'});
            unset($data->{'filetype'});
        }
        if (property_exists($data, 'groups')) {
            $values_1 = [];
            foreach ($data->{'groups'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
            unset($data->{'groups'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'image_exif_rotation')) {
            $object->setImageExifRotation($data->{'image_exif_rotation'});
            unset($data->{'image_exif_rotation'});
        }
        if (property_exists($data, 'ims')) {
            $values_2 = [];
            foreach ($data->{'ims'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setIms($values_2);
            unset($data->{'ims'});
        }
        if (property_exists($data, 'is_external')) {
            $object->setIsExternal($data->{'is_external'});
            unset($data->{'is_external'});
        }
        if (property_exists($data, 'is_public')) {
            $object->setIsPublic($data->{'is_public'});
            unset($data->{'is_public'});
        }
        if (property_exists($data, 'mimetype')) {
            $object->setMimetype($data->{'mimetype'});
            unset($data->{'mimetype'});
        }
        if (property_exists($data, 'mode')) {
            $object->setMode($data->{'mode'});
            unset($data->{'mode'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'original_h')) {
            $object->setOriginalH($data->{'original_h'});
            unset($data->{'original_h'});
        }
        if (property_exists($data, 'original_w')) {
            $object->setOriginalW($data->{'original_w'});
            unset($data->{'original_w'});
        }
        if (property_exists($data, 'permalink')) {
            $object->setPermalink($data->{'permalink'});
            unset($data->{'permalink'});
        }
        if (property_exists($data, 'permalink_public')) {
            $object->setPermalinkPublic($data->{'permalink_public'});
            unset($data->{'permalink_public'});
        }
        if (property_exists($data, 'pinned_info')) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'pinned_info'} as $key => $value_3) {
                $values_3[$key] = $this->denormalizer->denormalize($value_3, 'JoliCode\\Slack\\Api\\Model\\DefsPinnedInfoItem', 'json', $context);
            }
            $object->setPinnedInfo($values_3);
            unset($data->{'pinned_info'});
        }
        if (property_exists($data, 'pinned_to')) {
            $values_4 = [];
            foreach ($data->{'pinned_to'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPinnedTo($values_4);
            unset($data->{'pinned_to'});
        }
        if (property_exists($data, 'pretty_type')) {
            $object->setPrettyType($data->{'pretty_type'});
            unset($data->{'pretty_type'});
        }
        if (property_exists($data, 'public_url_shared')) {
            $object->setPublicUrlShared($data->{'public_url_shared'});
            unset($data->{'public_url_shared'});
        }
        if (property_exists($data, 'reactions')) {
            $values_5 = [];
            foreach ($data->{'reactions'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_5);
            unset($data->{'reactions'});
        }
        if (property_exists($data, 'size')) {
            $object->setSize($data->{'size'});
            unset($data->{'size'});
        }
        if (property_exists($data, 'thumb_1024')) {
            $object->setThumb1024($data->{'thumb_1024'});
            unset($data->{'thumb_1024'});
        }
        if (property_exists($data, 'thumb_1024_h')) {
            $object->setThumb1024H($data->{'thumb_1024_h'});
            unset($data->{'thumb_1024_h'});
        }
        if (property_exists($data, 'thumb_1024_w')) {
            $object->setThumb1024W($data->{'thumb_1024_w'});
            unset($data->{'thumb_1024_w'});
        }
        if (property_exists($data, 'thumb_160')) {
            $object->setThumb160($data->{'thumb_160'});
            unset($data->{'thumb_160'});
        }
        if (property_exists($data, 'thumb_360')) {
            $object->setThumb360($data->{'thumb_360'});
            unset($data->{'thumb_360'});
        }
        if (property_exists($data, 'thumb_360_h')) {
            $object->setThumb360H($data->{'thumb_360_h'});
            unset($data->{'thumb_360_h'});
        }
        if (property_exists($data, 'thumb_360_w')) {
            $object->setThumb360W($data->{'thumb_360_w'});
            unset($data->{'thumb_360_w'});
        }
        if (property_exists($data, 'thumb_480')) {
            $object->setThumb480($data->{'thumb_480'});
            unset($data->{'thumb_480'});
        }
        if (property_exists($data, 'thumb_480_h')) {
            $object->setThumb480H($data->{'thumb_480_h'});
            unset($data->{'thumb_480_h'});
        }
        if (property_exists($data, 'thumb_480_w')) {
            $object->setThumb480W($data->{'thumb_480_w'});
            unset($data->{'thumb_480_w'});
        }
        if (property_exists($data, 'thumb_64')) {
            $object->setThumb64($data->{'thumb_64'});
            unset($data->{'thumb_64'});
        }
        if (property_exists($data, 'thumb_720')) {
            $object->setThumb720($data->{'thumb_720'});
            unset($data->{'thumb_720'});
        }
        if (property_exists($data, 'thumb_720_h')) {
            $object->setThumb720H($data->{'thumb_720_h'});
            unset($data->{'thumb_720_h'});
        }
        if (property_exists($data, 'thumb_720_w')) {
            $object->setThumb720W($data->{'thumb_720_w'});
            unset($data->{'thumb_720_w'});
        }
        if (property_exists($data, 'thumb_80')) {
            $object->setThumb80($data->{'thumb_80'});
            unset($data->{'thumb_80'});
        }
        if (property_exists($data, 'thumb_800')) {
            $object->setThumb800($data->{'thumb_800'});
            unset($data->{'thumb_800'});
        }
        if (property_exists($data, 'thumb_800_h')) {
            $object->setThumb800H($data->{'thumb_800_h'});
            unset($data->{'thumb_800_h'});
        }
        if (property_exists($data, 'thumb_800_w')) {
            $object->setThumb800W($data->{'thumb_800_w'});
            unset($data->{'thumb_800_w'});
        }
        if (property_exists($data, 'thumb_960')) {
            $object->setThumb960($data->{'thumb_960'});
            unset($data->{'thumb_960'});
        }
        if (property_exists($data, 'thumb_960_h')) {
            $object->setThumb960H($data->{'thumb_960_h'});
            unset($data->{'thumb_960_h'});
        }
        if (property_exists($data, 'thumb_960_w')) {
            $object->setThumb960W($data->{'thumb_960_w'});
            unset($data->{'thumb_960_w'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
            unset($data->{'timestamp'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
            unset($data->{'title'});
        }
        if (property_exists($data, 'url_private')) {
            $object->setUrlPrivate($data->{'url_private'});
            unset($data->{'url_private'});
        }
        if (property_exists($data, 'url_private_download')) {
            $object->setUrlPrivateDownload($data->{'url_private_download'});
            unset($data->{'url_private_download'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        if (property_exists($data, 'username')) {
            $object->setUsername($data->{'username'});
            unset($data->{'username'});
        }
        foreach ($data as $key_1 => $value_6) {
            if (preg_match('/.*/', $key_1)) {
                $object[$key_1] = $value_6;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannels()) {
            $values = [];
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data->{'channels'} = $values;
        }
        if (null !== $object->getCommentsCount()) {
            $data->{'comments_count'} = $object->getCommentsCount();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getDisplayAsBot()) {
            $data->{'display_as_bot'} = $object->getDisplayAsBot();
        }
        if (null !== $object->getEditable()) {
            $data->{'editable'} = $object->getEditable();
        }
        if (null !== $object->getExternalType()) {
            $data->{'external_type'} = $object->getExternalType();
        }
        if (null !== $object->getFiletype()) {
            $data->{'filetype'} = $object->getFiletype();
        }
        if (null !== $object->getGroups()) {
            $values_1 = [];
            foreach ($object->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'groups'} = $values_1;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getImageExifRotation()) {
            $data->{'image_exif_rotation'} = $object->getImageExifRotation();
        }
        if (null !== $object->getIms()) {
            $values_2 = [];
            foreach ($object->getIms() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'ims'} = $values_2;
        }
        if (null !== $object->getIsExternal()) {
            $data->{'is_external'} = $object->getIsExternal();
        }
        if (null !== $object->getIsPublic()) {
            $data->{'is_public'} = $object->getIsPublic();
        }
        if (null !== $object->getMimetype()) {
            $data->{'mimetype'} = $object->getMimetype();
        }
        if (null !== $object->getMode()) {
            $data->{'mode'} = $object->getMode();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOriginalH()) {
            $data->{'original_h'} = $object->getOriginalH();
        }
        if (null !== $object->getOriginalW()) {
            $data->{'original_w'} = $object->getOriginalW();
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        if (null !== $object->getPermalinkPublic()) {
            $data->{'permalink_public'} = $object->getPermalinkPublic();
        }
        if (null !== $object->getPinnedInfo()) {
            $values_3 = new \stdClass();
            foreach ($object->getPinnedInfo() as $key => $value_3) {
                $values_3->{$key} = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'pinned_info'} = $values_3;
        }
        if (null !== $object->getPinnedTo()) {
            $values_4 = [];
            foreach ($object->getPinnedTo() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'pinned_to'} = $values_4;
        }
        if (null !== $object->getPrettyType()) {
            $data->{'pretty_type'} = $object->getPrettyType();
        }
        if (null !== $object->getPublicUrlShared()) {
            $data->{'public_url_shared'} = $object->getPublicUrlShared();
        }
        if (null !== $object->getReactions()) {
            $values_5 = [];
            foreach ($object->getReactions() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'reactions'} = $values_5;
        }
        if (null !== $object->getSize()) {
            $data->{'size'} = $object->getSize();
        }
        if (null !== $object->getThumb1024()) {
            $data->{'thumb_1024'} = $object->getThumb1024();
        }
        if (null !== $object->getThumb1024H()) {
            $data->{'thumb_1024_h'} = $object->getThumb1024H();
        }
        if (null !== $object->getThumb1024W()) {
            $data->{'thumb_1024_w'} = $object->getThumb1024W();
        }
        if (null !== $object->getThumb160()) {
            $data->{'thumb_160'} = $object->getThumb160();
        }
        if (null !== $object->getThumb360()) {
            $data->{'thumb_360'} = $object->getThumb360();
        }
        if (null !== $object->getThumb360H()) {
            $data->{'thumb_360_h'} = $object->getThumb360H();
        }
        if (null !== $object->getThumb360W()) {
            $data->{'thumb_360_w'} = $object->getThumb360W();
        }
        if (null !== $object->getThumb480()) {
            $data->{'thumb_480'} = $object->getThumb480();
        }
        if (null !== $object->getThumb480H()) {
            $data->{'thumb_480_h'} = $object->getThumb480H();
        }
        if (null !== $object->getThumb480W()) {
            $data->{'thumb_480_w'} = $object->getThumb480W();
        }
        if (null !== $object->getThumb64()) {
            $data->{'thumb_64'} = $object->getThumb64();
        }
        if (null !== $object->getThumb720()) {
            $data->{'thumb_720'} = $object->getThumb720();
        }
        if (null !== $object->getThumb720H()) {
            $data->{'thumb_720_h'} = $object->getThumb720H();
        }
        if (null !== $object->getThumb720W()) {
            $data->{'thumb_720_w'} = $object->getThumb720W();
        }
        if (null !== $object->getThumb80()) {
            $data->{'thumb_80'} = $object->getThumb80();
        }
        if (null !== $object->getThumb800()) {
            $data->{'thumb_800'} = $object->getThumb800();
        }
        if (null !== $object->getThumb800H()) {
            $data->{'thumb_800_h'} = $object->getThumb800H();
        }
        if (null !== $object->getThumb800W()) {
            $data->{'thumb_800_w'} = $object->getThumb800W();
        }
        if (null !== $object->getThumb960()) {
            $data->{'thumb_960'} = $object->getThumb960();
        }
        if (null !== $object->getThumb960H()) {
            $data->{'thumb_960_h'} = $object->getThumb960H();
        }
        if (null !== $object->getThumb960W()) {
            $data->{'thumb_960_w'} = $object->getThumb960W();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getUrlPrivate()) {
            $data->{'url_private'} = $object->getUrlPrivate();
        }
        if (null !== $object->getUrlPrivateDownload()) {
            $data->{'url_private_download'} = $object->getUrlPrivateDownload();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        }
        foreach ($object as $key_1 => $value_6) {
            if (preg_match('/.*/', $key_1)) {
                $data->{$key_1} = $value_6;
            }
        }

        return $data;
    }
}