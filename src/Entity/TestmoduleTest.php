<?php
/**
* DS: Product Blog
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
* @author    DS: Product Blog
* @copyright Copyright 2020 © Dark-Side.pro All right reserved
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* @category  Dark-Side.pro
* @package   dsblog
*/


// modules/yourmodule/src/Entity/ProductComment.php
namespace DarkSide\Testmodule\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */

class TestmoduleTest 
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_testmodule_test", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="test_string", type="string", length=500)
     */
    private $testString;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTestString()
    {
        return $this->testString;
    }

    /**
     * @param string $testString
     *
     * @return TestmoduleTest
     */
    public function setTestString($testString)
    {
        $this->testString = $testString;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id_testmodule_test' => $this->getId(),
            'test_string' => $this->getTestString(),
        ];
    }


}
