<?php

namespace Vipps\Tests\Unit\Model\Error;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use Vipps\Model\Error\PaymentError;
use Vipps\Tests\Unit\Model\ModelTestBase;

class PaymentErrorTest extends ModelTestBase
{

    /**
     * @var \Vipps\Model\Error\PaymentError
     */
    protected $response;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();
        AnnotationRegistry::registerLoader('class_exists');
        $serializer = SerializerBuilder::create()->build();
        $this->response = $serializer->deserialize(
            json_encode([
                'errorGroup' => 'test_error_group',
                'errorCode' => 'test_error_code',
                'errorMessage' => 'test_error_message',
            ]),
            PaymentError::class,
            'json'
        );
    }

    /**
     * @covers \Vipps\Model\Error\PaymentError::getErrorGroup()
     */
    public function testGetErrorGroup()
    {
        $this->assertEquals('test_error_group', $this->response->getErrorGroup());
    }

    /**
     * @covers \Vipps\Model\Error\PaymentError::getErrorMessage()
     */
    public function testGetErrorMessage()
    {
        $this->assertEquals('test_error_message', $this->response->getErrorMessage());
    }

    /**
     * @covers \Vipps\Model\Error\PaymentError::getErrorCode()
     */
    public function testGetErrorCode()
    {
        $this->assertEquals('test_error_code', $this->response->getErrorCode());
    }

    /**
     * @covers \Vipps\Model\Error\PaymentError::getCode()
     */
    public function testGetCode()
    {
        $this->assertEquals('test_error_code', $this->response->getCode());
    }

    /**
     * @covers \Vipps\Model\Error\PaymentError::getMessage()
     */
    public function testGetMessage()
    {
        $this->assertEquals('test_error_message', $this->response->getMessage());
    }

}
