<?php
namespace Goetas\XML\WSDLReader\Wsdl\Binding;

use Goetas\XML\WSDLReader\Wsdl\ExtensibleDocumented;
/**
 * XSD Type: tBindingOperationFault
 */
class OperationFault extends ExtensibleDocumented
{

    /**
     * @var string
     */
    protected $name;

    protected $operation;

    public function __construct(Operation $operation, $name)
    {
        parent::__construct($operation->getDefinition());

        $this->name = $name;
        $this->operation = $operation;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param $name string
     * @return \Goetas\XML\WSDLReader\Wsdl\Binding\OperationFault
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}