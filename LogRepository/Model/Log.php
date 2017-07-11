<?php

namespace Magestudy\LogRepository\Model;

use Magestudy\LogRepository\Api\Data\LogInterface;
use Magento\Framework\Model\AbstractModel;
use Magestudy\LogRepository\Model\ResourceModel\Log as ResourceModel;

class Log extends AbstractModel
    implements LogInterface
{
    const ID = 'study_log_id';
    const DATE = 'date';
    const CONTENT = 'content';

    /**
     * @var string
     */
    protected $_urlBuilder;

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->setData(self::DATE, $date);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->getData(self::DATE);
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->setData(self::CONTENT, $content);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }
}