<?php
namespace FluidTYPO3\Vhs\Tests\Fixtures\Domain\Model;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * @author Björn Fromme <fromme@dreipunktnull.com>, dreipunktnull
 * @package Vhs
 */
class Foo extends AbstractEntity {

    /**
     * @var string
     * @validate NotEmpty
     */
    protected $bar;

	/**
	 * @var Foo
	 */
	protected $foo;

    /**
     * @var ObjectStorage<Foo>
     */
    protected $children;

    public function __construct() {
        $this->bar = 'baz';
        $this->children = new ObjectStorage();
    }

    /**
     * @return string
     */
    public function getBar() {
        return $this->bar;
    }

	/**
	 * @param Foo $foo
	 */
	public function setFoo($foo) {
		$this->foo = $foo;
	}

	/**
	 * @return Foo
	 */
	public function getFoo() {
		return $this->foo;
	}

    /**
     * @return ObjectStorage<Foo>
     */
    public function getChildren() {
        return $this->children;
    }

    /**
     * @param Foo $child
     * @return Foo
     */
    public function addChild(Foo $child) {
        $this->children->attach($child);

        return $this;
    }
}
