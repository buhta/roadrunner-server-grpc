<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: service.proto

namespace Test\CustomNamespace;

use Spiral\RoadRunner\GRPC;

interface ServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "testPhpNamespace.Service";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param SimpleMessage $in
    * @return SimpleMessage
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function SimpleMethod(GRPC\ContextInterface $ctx, SimpleMessage $in): SimpleMessage;
}
