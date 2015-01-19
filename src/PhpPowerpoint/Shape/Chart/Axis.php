<?php
/**
 * This file is part of PHPPowerPoint - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPowerPoint is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPPowerPoint
 * @copyright   2009-2014 PHPPowerPoint contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpPowerpoint\Shape\Chart;

use PhpOffice\PhpPowerpoint\ComparableInterface;

/**
 * \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
 */
class Axis implements ComparableInterface
{
    /**
     * Title
     *
     * @var string
     */
    private $title = 'Axis Title';

    /**
     * Format code
     *
     * @var string
     */
    private $formatCode = '';

    /**
     * Min Value
     *
     * @var integer
     */
    private $min = null;

    /**
     * Max Value
     *
     * @var integer
     */
    private $max = null;
    
    /**
     * Minor Tick Mark
     *
     * @var string
     */
    private $minorTickMark = 'out';
    
    /**
     * Major Tick Mark
     *
     * @var string
     */
    private $majorTickMark = 'cross';
    
    /**
     * Minor Unit
     *
     * @var string
     */
    private $minorUnit = '0.05';
    
    /**
     * Major Unit
     *
     * @var string
     */
    private $majorUnit = '0.1';

    /**
     * Create a new \PhpOffice\PhpPowerpoint\Shape\Chart\Axis instance
     *
     * @param string $title Title
     */
    public function __construct($title = 'Axis Title')
    {
        $this->title = $title;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param  string                         $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setTitle($value = 'Axis Title')
    {
        $this->title = $value;

        return $this;
    }

    /**
     * Get Format Code
     *
     * @return string
     */
    public function getFormatCode()
    {
        return $this->formatCode;
    }

    /**
     * Set Format Code
     *
     * @param  string                         $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setFormatCode($value = '')
    {
        $this->formatCode = $value;

        return $this;
    }

    /**
     * Get Min Value
     *
     * @return integer
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set Min Value
     *
     * @param integer $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMin($value = null)
    {
        $this->min = $value;

        return $this;
    }

    /**
     * Get Max Value
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set Max Value
     *
     * @param integer $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMax($value = null)
    {
        $this->max = $value;

        return $this;
    }

    /**
     * Get Major Tick Mark
     *
     * @return string
     */
    public function getMajorTickMark()
    {
        return $this->majorTickMark;
    }

    /**
     * Set Major Tick Mark
     *
     * @param string $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMajorTickMark($value = null)
    {
        $this->majorTickMark = $value;

        return $this;
    }

    /**
     * Get Minor Tick Mark
     *
     * @return string
     */
    public function getMinorTickMark()
    {
        return $this->minorTickMark;
    }

    /**
     * Set Minor Tick Mark
     *
     * @param string $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMinorTickMark($value = null)
    {
        $this->minorTickMark = $value;

        return $this;
    }

    /**
     * Get Major Unit
     *
     * @return string
     */
    public function getMajorUnit()
    {
        return $this->majorUnit;
    }

    /**
     * Set Major Unit
     *
     * @param string $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMajorUnit($value = null)
    {
        $this->majorUnit = $value;

        return $this;
    }

    /**
     * Get Minor Unit
     *
     * @return string
     */
    public function getMinorUnit()
    {
        return $this->minorUnit;
    }

    /**
     * Set Minor Unit
     *
     * @param string $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Axis
     */
    public function setMinorUnit($value = null)
    {
        $this->minorUnit = $value;

        return $this;
    }

    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        return md5($this->title . $this->formatCode . __CLASS__);
    }

    /**
     * Hash index
     *
     * @var string
     */
    private $hashIndex;

    /**
     * Get hash index
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @return string Hash index
     */
    public function getHashIndex()
    {
        return $this->hashIndex;
    }

    /**
     * Set hash index
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @param string $value Hash index
     */
    public function setHashIndex($value)
    {
        $this->hashIndex = $value;
        return $this;
    }
}
