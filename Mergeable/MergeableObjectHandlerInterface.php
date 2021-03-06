<?php
namespace IDCI\Bundle\MergeTokenBundle\Mergeable;

use IDCI\Bundle\MergeTokenBundle\Exception\MissingMergeableObjectMethodException;
use IDCI\Bundle\MergeTokenBundle\Exception\UndefinedMergeableObjectException;

/**
 * MergeableObjectHandlerInterface
 *
 * @author Brahim Boukoufallah <brahim.boukoufallah@idci-consulting.fr>
 */
interface MergeableObjectHandlerInterface
{
    /**
     * SetMergeableObject
     *
     * @param string                   $id
     * @param MergeableObjectInterface $object
     */
    public function setMergeableObject($id, MergeableObjectInterface $object);

    /**
     * GetMergeableObjects
     *
     * @return MergeableObjectInterface[]
     */
    public function getMergeableObjects();

    /**
     * GetMergeableObject
     *
     * @param  string $id
     *
     * @return MergeableObjectInterface
     * @throws UndefinedMergeableObjectException
     */
    public function getMergeableObject($id);

    /**
     * GuessMergeableObject
     *
     * @param  object $object
     *
     * @return MergeableObjectInterface
     * @throws UndefinedMergeableObjectException
     */
    public function guessMergeableObject($object);

    /**
     * Merge token
     *
     * @param  object  $object
     * @param  string  $propertyName
     * @param  boolean $replace
     *
     * @return string  The merge value
     * @throws MissingMergeableObjectMethodException
     */
    public function mergeToken($object, $propertyName, $replace = true);
}
