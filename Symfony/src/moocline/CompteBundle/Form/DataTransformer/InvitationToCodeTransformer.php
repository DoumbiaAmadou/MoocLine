<?php

namespace moocline\CompteBundle\Form\DataTransformer;

use moocline\CompteBundle\Entity\Invitation;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

/**
 * Transforms an Invitation to an invitation code.
 */
class InvitationToCodeTransformer implements DataTransformerInterface
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function transform($value)
    {
        if (null === $value) {
            return null;
        }

        if (!$value instanceof Invitation) {
            throw new UnexpectedTypeException($value, 'moocline\CompteBundle\Entity\Invitation');
        }

        return $value->getCode();
    }

    /*public function reverseTransform($value)
    {
        if (null === $value || '' === $value) {
            return null;
        }

        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }

        return $this->entityManager
            ->getRepository('moocline\CompteBundle\Entity\Invitation')
            ->findOneBy(array(
                'code' => $value,
                'user' => null,
            ));
    }*/

    public function findOneByCode($value)
    {
        $query = $this->entityManager
            ->createQuery('
                        SELECT i FROM moocline\CompteBundle\Entity\Invitation i
                        LEFT JOIN moocline\CompteBundle\Entity\User u WITH u.invitation = i
                        WHERE i.code = :code AND u IS NULL'
            )->setParameter('code', $value);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function reverseTransform($value)
    {
        if (null === $value || '' === $value) {
            return null;
        }

        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }
        return $this->findOneByCode($value);
    }
}