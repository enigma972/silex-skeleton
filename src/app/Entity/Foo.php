<?php
namespace app\Entity;

/**
 * @Entity(repositoryClass="app\Repository\FooRepository")
 * @Table(name="foo")
 */
class Foo
{
    /**
     * @Column(name="id", type="integer")
     * @Id()
     * @GeneratedValue
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
